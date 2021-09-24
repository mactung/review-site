@extends('main')
@section('content')
<div id="content" class="site-content">
    <div class="show-ad-in-mobile mobile-header-search">
        <div class="container">
            <form role="search" method="get" class="search-form" action="demo/wordpress/themes/barta">
                <div class="row custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="search-query form-control" placeholder="Search here ..." value=""
                            name="s" />
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
    @include('inc.top-posts-sticker')
    @include('inc.info-bar')
    <div id="primary" class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-12">
                    <main id="main" class="site-main">
                        <article id="post-1732" class="
                                post-1732
                                page
                                type-page
                                status-publish
                                hentry
                            ">
                            <div class="entry-content">
                                <div data-elementor-type="wp-post" data-elementor-id="1732" class="
                                        elementor
                                        elementor-1732
                                        elementor-bc-flex-widget
                                    " data-elementor-settings="[]">
                                    <div class="elementor-inner">
                                        <div class="elementor-section-wrap">
                                            @include('home.inc.recent-posts')
                                            @include('home.inc.featured-posts', [
                                            'name' => 'Featured posts',
                                            'data' => $featuredPosts
                                            ])
                                            {{-- @include('home.inc.featured-posts') --}}
                                            @include('home.inc.categories')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
<!--#content-->
@endsection