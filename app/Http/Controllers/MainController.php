<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getIndex() {
        return view('front/home');
    }

    public function getProjects() {
        return view('front/projects');
    }

    public function getProject($id) {
        return view('front/project', [
            'projectId' => $id
        ]);
    }

    public function getNewsItem($id) {
        return view('front/news_item', [
            'newsId' => $id
        ]);
    }

    public function getContact() {
        return view('front/contact');
    }

    public function getAbout() {
        return view('front/about');
    }
}
