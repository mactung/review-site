<div id="rt-news-box-7" class="title-style-2 widget rt-news-box">
    <div style="border-bottom: 2px solid #111" class="rt-widget-title-holder">
        <h3 style="background-color: #111" class="widgettitle">
            {{ $listName ?? '' }}<span style="border-top: 10px solid #111" class="titleinner"></span>
        </h3>
    </div>
    <div class="light">
        @foreach ($posts as $post)
        <div class="rt-news-box-widget box-style-1">
            <div class="media">
                <a class="post-img-holder img-opacity-hover"
                    href="/reviews/{{ $post->slug }}"
                    title="{{ $post->title}}">
                    <img width="375" height="300"
                        src="{{ $post->thumbnail}}"
                        class="media-object wp-post-image" alt="" loading="lazy" /></a>
                <div class="media-body">
                    <div class="post-date-dark">
                        <ul>
                            <li>
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>{{ $post->created_at->format('M d, Y')}}
                            </li>
                        </ul>
                    </div>
                    <h3 class="title-medium-dark mb-none">
                        <a
                            href="/reviews/{{ $post->slug }}">
                            {{ $post->title}}
                            
                        </a>
                    </h3>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>