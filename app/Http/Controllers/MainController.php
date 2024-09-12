<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use App\Models\Article;
use App\Models\Page;
use App\Models\PageContent;
use App\Models\Project;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function getIndex()
    {
        $text = PageContent::where('page_id', '1')->select('name', 'content', 'image_url')->get();
        $meta = Page::where('id', 1)->select('title', 'keywords', 'description')->get()->first();
        $projects = Project::take(8)->get();
        $articles = Article::take(4)->get();
        $vendors = Vendor::select('image')->orderBy('sort', 'asc')->orderBy('id', 'desc')->get();
        return view('front.home', compact('text', 'meta', 'projects', 'articles', 'vendors'));
    }

    public function getProjects()
    {
        $text = PageContent::where('page_id', '4')->select('name', 'content')->get();
        $meta = Page::where('id', 4)->select('title', 'keywords', 'description')->get()->first();
        $projects = Project::take(16)->orderBy('id', 'desc')->get();
        return view('front.projects', compact('text', 'meta', 'projects'));
    }

    public function getProject(Project $projectAlias)
    {

        return view('front/project', [
            'project' => $projectAlias
        ]);
    }

    public function getNewsItem($alias)
    {
        $article = Article::where('alias', $alias)->get()->first();
        return view('front/news_item', compact('article'));
    }

    public function getContact()
    {
        $text = PageContent::where('page_id', '3')->select('name', 'content')->get();
        $meta = Page::where('id', 3)->select('title', 'keywords', 'description')->get()->first();
        return view('front/contact', compact('text', 'meta'));
    }

    public function getAbout()
    {
        $text = PageContent::where('page_id', '2')->select('name', 'content')->get();
        $meta = Page::where('id', 2)->select('title', 'keywords', 'description')->get()->first();
        return view('front/about', compact('text', 'meta'));
    }

    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'text' => 'required'
        ]);

        Mail::to($validated['email'])->send(new Feedback($validated));

        return response()->json('success', 200);
    }
}
