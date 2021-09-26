<div class="editors-news">
    <div class="row">
        <div class="col-lg-3">
            <div class="d-flex position-relative float-left">
                <h3 class="section-title">Categories</h3>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-sm-6 col-md-4 mb-5 mb-sm-2">
            <div class="position-relative image-hover">
                <img
                    src="{{$category->image_url }}"
                    class="img-fluid"
                    alt="world-news"
                />
                <span class="thumb-title">{{ $category->name}}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
