<?php

namespace App\Http\ViewComposers;


use App\Models\Page;
use Illuminate\View\View;

class NavigationComposer
{

    protected $pages;

    public function __construct(Page $page)
    {

        $this->pages = $page->orderBy('order')->get();
    }

    public function compose(View $view)
    {
        $view->with('pagesData', $this->pages);
    }
}
