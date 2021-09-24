@extends('main')
@section('content')
<div id="content" class="site-content">
    <div class="show-ad-in-mobile mobile-header-search">
        <div class="container">
            <form role="search" method="get" class="search-form"
                action="/demo/wordpress/themes/barta">
                <div class="row custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="search-query form-control" placeholder="Search here ..." value=""
                            name="s">
                        <span class="input-group-btn">
                            <button class="btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </span></div>
                </div>
            </form>
        </div>
    </div>
    <div class="entry-banner"
        style="background:url('{{ $category->image_url }}') no-repeat scroll center center / cover">
        <div class="container">
            <div class="entry-banner-content">
                <h1 class="entry-title">{{$category->name}}</h1>
                <div class="breadcrumb-area">
                    <div class="entry-breadcrumb"><span property="itemListElement" class=" 1 breadcrumb-first"
                            typeof="ListItem"><a href="/"><span
                                    class="fa fa-home" aria-hidden="true"></span> Home</a></span><em class="delimiter">
                            - </em><span><span class="current">{{$category->name}}</span></span></div>
                </div>
            </div>
        </div>
    </div>
    <div id="primary" class="content-area" style="padding: 70px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-12">
                    <main id="main" class="site-main">
                        <div data-taxonomy="category" data-termid="190"
                            class="auto-clear barta-pagination blog-layouts ajax-content-wrapper">
                            @foreach ($category->posts as $post)
                                @include('category.inc.post-item', ['post' => $post])
                            @endforeach
                        </div>
                        <div class="pagination-area">
                            <ul>
                                <li class="active"><a
                                        href="/demo/wordpress/themes/barta/category/sports/">1</a>
                                </li>
                                <li><a
                                        href="/demo/wordpress/themes/barta/category/sports/page/2/">2</a>
                                </li>
                                <li><a
                                        href="/demo/wordpress/themes/barta/category/sports/page/2/"><i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </main>
                </div>
                <div class="col-lg-3 col-md-12">
                    <aside class="sidebar-widget-area">
                        <div id="search-3" class="title-style-2 widget widget_search">
                            <form role="search" method="get" class="search-form"
                                action="/demo/wordpress/themes/barta/">
                                <div class="row custom-search-input">
                                    <div class="input-group col-md-12">
                                        <input type="text" class="search-query form-control"
                                            placeholder="Search here ..." value="" name="s">
                                        <span class="input-group-btn">
                                            <button class="btn" type="submit">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                        </span></div>
                                </div>
                            </form>
                        </div>
                        @include('inc.list-post-right')
                        @include('inc.list-post-right')
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection