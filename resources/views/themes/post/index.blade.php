@extends('main') @section('content')
<div id="content" class="site-content">
    <div class="show-ad-in-mobile mobile-header-search">
        <div class="container">
            <form
                role="search"
                method="get"
                class="search-form"
                action="/demo/wordpress/themes/barta"
            >
                <div class="row custom-search-input">
                    <div class="input-group col-md-12">
                        <input
                            type="text"
                            class="search-query form-control"
                            placeholder="Search here ..."
                            value=""
                            name="s"
                        />
                        <span class="input-group-btn">
                            <button class="btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="rt-news-ticker-holder">
        <div class="container">
            <div
                id="ticker-wrapper-1631549557015"
                class="ticker-wrapper has-js left"
            >
                <div id="ticker-1631549557015" class="ticker">
                    <div id="ticker-title-1631549557015" class="ticker-title">
                        <span>Top Stories</span>
                        <div class="boltu-right"></div>
                    </div>
                    <p
                        id="ticker-content-1631549557015"
                        class="ticker-content"
                        style="opacity: 1; left: 100.594px"
                    >
                        <a
                            href="/demo/wordpress/themes/barta/call-of-duty-ww2s-new-war-mode-makes-multiplayer-fresh/"
                            >Call Of Duty WW2’s New War Mode Makes Multiplayer
                            Fresh</a
                        >
                    </p>
                    <div
                        id="ticker-swipe-1631549557015"
                        class="ticker-swipe"
                        style="
                            left: 100.594px;
                            margin-left: 425.078px;
                            display: none;
                        "
                    >
                        <span style=""> <!-- --></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="entry-banner"
        style="background:url('{{$post->category->image_url}}') no-repeat scroll center center / cover"
    >
        <div class="container">
            <div class="entry-banner-content">
                <h1 class="entry-title">{{ $post->title }}</h1>
                <div class="breadcrumb-area">
                    <div class="entry-breadcrumb">
                        <span
                            property="itemListElement"
                            class="1 breadcrumb-first"
                            typeof="ListItem"
                            ><a href="/"
                                ><span
                                    class="fa fa-home"
                                    aria-hidden="true"
                                ></span>
                                Home</a
                            ></span
                        ><em class="delimiter"> - </em
                        ><span
                            property="itemListElement"
                            class="2 breadcrumb-first"
                            typeof="ListItem"
                            ><a href="/category/{{ $post->category->slug }}">
                                {{ $post->category->name }}</a
                            ></span
                        ><em class="delimiter"> - </em
                        ><span
                            ><span
                                class="current"
                                >{{ $post->title }}</span
                            ></span
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="primary" class="content-area" style="padding: 70px 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <main id="main" class="site-main">
                        <div
                            id="post-2767"
                            class="
                                post-2767 post
                                type-post
                                status-publish
                                format-standard
                                has-post-thumbnail
                                hentry
                                category-sports
                                tag-games tag-sports
                            "
                        >
                            <div id="contentHolder">
                                @include('post.inc.entry-header')
                                <div class="entry-content">
                                    {{$post->content}}
                                </div>
                            </div>
                            @include('post.inc.post-tags')
                            
                            <div class="row no-gutters divider post-navigation">
                                <div
                                    class="
                                        col-lg-6 col-md-6 col-sm-6 col-6
                                        text-left
                                    "
                                >
                                    <i
                                        class="fa fa-angle-left"
                                        aria-hidden="true"
                                    ></i>
                                    <a
                                        href="/demo/wordpress/themes/barta/vinales-will-be-as-tough-for-rossi-as-lorenzo-suzuki-motogp-boss-3/"
                                        rel="prev"
                                        >Previous article</a
                                    >
                                    <h3 class="post-nav-title">
                                        <a
                                            href="/demo/wordpress/themes/barta/vinales-will-be-as-tough-for-rossi-as-lorenzo-suzuki-motogp-boss-3/"
                                            rel="prev"
                                            >Vinales will be as tough for Rossi
                                            as Lorenzo – Suzuki MotoGP boss</a
                                        >
                                    </h3>
                                </div>
                                <div
                                    class="
                                        col-lg-6 col-md-6 col-sm-6 col-6
                                        text-right
                                    "
                                >
                                    <a
                                        href="/demo/wordpress/themes/barta/vinales-will-be-as-tough-for-rossi-as-lorenzo-suzuki-motogp-boss-3/"
                                        rel="prev"
                                        >Next article</a
                                    >
                                    <i
                                        class="fa fa-angle-right"
                                        aria-hidden="true"
                                    ></i>
                                    <h3 class="post-nav-title">
                                        <a
                                            href="/demo/wordpress/themes/barta/magical-fish-basically-has-the-power-to-conjure-its-own-patronus-2/"
                                            rel="next"
                                            >Magical fish basically has the
                                            power to conjure its own Patronus</a
                                        >
                                    </h3>
                                </div>
                            </div>
                            {{-- @include('post.inc.related-posts') --}}
                        </div>
                        
                    </main>
                </div>
                <div class="col-lg-3 col-md-12">
                    <aside class="sidebar-widget-area">
                        <div
                            id="search-3"
                            class="title-style-2 widget widget_search"
                        >
                            <form
                                role="search"
                                method="get"
                                class="search-form"
                                action="/demo/wordpress/themes/barta/"
                            >
                                <div class="row custom-search-input">
                                    <div class="input-group col-md-12">
                                        <input
                                            type="text"
                                            class="search-query form-control"
                                            placeholder="Search here ..."
                                            value=""
                                            name="s"
                                        />
                                        <span class="input-group-btn">
                                            <button class="btn" type="submit">
                                                <i
                                                    class="fa fa-search"
                                                    aria-hidden="true"
                                                ></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @include('inc.list-post-right', [
                            'listName' => 'Recent reviews',
                            'posts' => $recentPosts,
                        ])
                        {{-- @include('inc.list-post-right') --}}
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
