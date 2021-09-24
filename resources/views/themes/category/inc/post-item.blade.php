<div
    id="post-2767"
    class="
        row
        entry-header
        blog-layout-1
        kk
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
    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
        <div class="entry-thumbnail-area">
            <a
                href="/reviews/{{$post->slug}}"
                class="img-opacity-hover img-overlay-70"
            >
                <img
                    width="560"
                    height="404"
                    src="{{$post->thumbnail}}"
                    class="img-responsive wp-post-image"
                    alt=""
                    loading="lazy"
                    srcset="
                        {{$post->thumbnail}} 560w,
                        {{$post->thumbnail}} 350w
                    "
                    sizes="(max-width: 560px) 100vw, 560px"
                />
            </a>
            <a href="/category/{{$category->slug}}"
                ><span class="el-rt-cat style_2" style="background: #0089ff"
                    >{{$category->name}}<span
                        class="titleinner"
                        style="border-top: 8px solid #0089ff"
                    ></span></span
            ></a>
        </div>
    </div>
    <div class="col-lg-7 col-md-12">
        <div class="entry-meta">
            <ul>
                <li>
                    <span><i class="fa fa-user" aria-hidden="true"></i></span
                    ><a
                        href="/demo/wordpress/themes/barta/author/admin/"
                        title="Posts by admin"
                        rel="author"
                        >admin</a
                    >
                </li>
                <li>
                    <i class="fa fa-clock-o" aria-hidden="true"></i>{{$post->created_at->format('M d, Y')}}
                </li>
            </ul>
        </div>
        <div class="entry-content">
            <h3>
                <a
                    href="/reviews/{{$post->slug}}"
                    >{{$post->title}}</a
                >
            </h3>
            <div class="blog-text">
                Nmply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry’s andard dummy text ever since…
            </div>
        </div>
    </div>
</div>
