<div class="world-news">
    <div class="row">
        <div class="col-sm-12">
            <div class="d-flex position-relative float-left">
                <h3 class="section-title">{{ $widgetName }}</h3>
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-theme" id="owl-carousel-widget">
        @foreach ($data as $post)
        <div class="item">

            <div class="position-relative image-hover">
                <a href="/reviews/{{ $post->slug }}" class="font-weight-bold text-dark pt-2">
                    <img src="{{ $post->thumbnail }}" height="360" style="object-fit: cover; min-width: 360px;"class="img-fluid" alt="world-news" />
                </a>
                <span class="thumb-title"><a href="/category/{{ $post->category->slug }}" class="font-weight-bold text-dark">{{ $post->category->name }}</a></span>
            </div>
            <h5 class="font-weight-bold mt-3">
                <a href="/reviews/{{ $post->slug }}" class="font-weight-bold pt-2">
                    {{ $post->title }}
                </a>
            </h5>
            <p class="fs-15 font-weight-normal">
                {{ $post->description }}
            </p>
        </div>
        @endforeach
    </div>
</div>