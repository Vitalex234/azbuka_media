<ul class="main-header-navigation-list">
@foreach($pagesData as $page)
    @if($page->have_modal)
        <li class="main-header-navigation-item" id="modal-popup"><a class="main-header-navigation-link modal-toggle" href="{{$page->url}}">{{$page->name}}</a></li>
        @else
            <li class="main-header-navigation-item"><a class="main-header-navigation-link" href="{{$page->url}}">{{$page->name}}</a></li>
        @endif
@endforeach
</ul>
