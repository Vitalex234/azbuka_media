<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Page;
use App\Models\PageContent;
use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getIndex() {
        $text = PageContent::where('page_id', '1')->select('name','content','image_url')->get();
        $meta = Page::where('id', 1)->select('title','keywords','description')->get()->first();
        $projects = Project::take(8)->get();
        $articles = Article::take(4)->get();
        return view('front.home', compact('text', 'meta', 'projects', 'articles'));
    }

    public function getProjects() {
        $text = PageContent::where('page_id', '4')->select('name','content')->get();
        $meta = Page::where('id', 4)->select('title','keywords','description')->get()->first();
        $projects = Project::take(8)->get();
        return view('front.projects', compact('text', 'meta', 'projects'));
    }

    public function getProject(Project $projectAlias) {

        return view('front/project', [
            'project' => $projectAlias
        ]);
    }

    public function getNewsItem($alias) {
        $article = Article::where('alias', $alias)->get()->first();
        return view('front/news_item', compact('article'));
    }

    public function getContact() {
        $text = PageContent::where('page_id', '3')->select('name','content')->get();
        $meta = Page::where('id', 3)->select('title','keywords','description')->get()->first();
        return view('front/contact', compact('text', 'meta'));
    }

    public function getAbout() {
        $text = PageContent::where('page_id', '2')->select('name','content')->get();
        $meta = Page::where('id', 2)->select('title','keywords','description')->get()->first();
        return view('front/about', compact('text', 'meta'));
    }
}
