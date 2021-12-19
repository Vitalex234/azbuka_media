<ul class="main-header-navigation-list">
@foreach($pagesData as $page)
        <li class="main-header-navigation-item"><a class="main-header-navigation-link" href="{{$page->url}}">{{$page->name}}</a></li>
@endforeach
</ul>
