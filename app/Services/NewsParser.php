<?php

namespace App\Services;

use App\Models\Article;
use App\Models\SiteOptions;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

class NewsParser
{
    public function __construct()
    {
    }

    public function parse()
    {
        $options = $this->getOptions();
        $content = $this->getContent($options);
        $this->store($content);
    }

    private function getContent($options)
    {
        $crawler = $this->getCrawler($options['news_source']);

        $content = $crawler->filter($options['news_wrapper_selector'])->each(function (Crawler $node, $i) use ($options) {
            if ($i < $options['news_count']) {
                $title = $this->getInnerText($node, $options['news_title_selector']);
                $preview = $this->getInnerText($node, $options['news_preview_selector']);
                //$dates = $this->getInnerText($node, $options['news_data_selector']);
                $detailLink = $node->filter($options['news_detail_link_selector'])->link()->getUri();
                $thumbnailNode = $node->filter($options['news_thumbnail_selector']);
                $thumbnail = '';
                try {
                    $thumbnail = $this->getImage($thumbnailNode);
                } catch (Exception $exception) {
                    Log::error($exception->getMessage());
                }

                $detailCrawler = $this->getCrawler($detailLink);
                $detailImageNode = $detailCrawler->filter($options['news_detail_image_selector']);
                $detailImage = '';
                try {
                    $detailImage = $this->getImage($detailImageNode);
                } catch (Exception $exception) {
                    Log::error($exception->getMessage());
                }

                $fullText = $this->getInnerText($detailCrawler, $options['news_full_text_selector']);

                $result = [
                    'title' => $title,
                    'short_desc' => $preview,
                    'image_thumb' => $thumbnail,
                    'image' => $detailImage,
                    'full_content' => $fullText,
                    'source_url' => $options['news_source'],
                    'alias' => Str::slug($title)
                ];
                return $result;
            }
        });

        return array_filter($content);
    }

    private function getImage($node)
    {
        $url = $node->image()->getUri();
        $info = pathinfo($url);
        $contents = file_get_contents($url);
        $fileName = $info['basename'];
        $path = Storage::put($fileName, $contents);
        if ($path) {
            return Storage::url($fileName);
        } else {
            return false;
        }

    }

    private function getInnerText($crawler, $selector)
    {
        $innerText = $crawler->filter($selector)->text();

        return $innerText;
    }

    private function getCrawler($url)
    {
        $html = file_get_contents($url);
        $crawler = new Crawler(null, $url);
        $crawler->addHtmlContent($html, 'UTF-8');
        return $crawler;
    }

    private function getOptions()
    {
        $options = [];
        SiteOptions::select('name', 'content')->where('name', 'LIKE', 'news%')->get()->map(function ($item, $key) use (&$options) {
            $options[$item->name] = $item->content;
        });
        return $options;
    }

    private function store(array $content)
    {
        Article::truncate();
        return Article::insert($content);
    }

    public function __invoke()
    {
        return $this->parse();
    }
}
