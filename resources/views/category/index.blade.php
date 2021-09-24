@extends('main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <h1 class="text-center mt-5">
                    {{ $category->name }}
                </h1>
                <p class="text-secondary fs-15">
                    {{ $category->description }}
                </p>
            </div>
        </div>
    </div>
    @include('inc.widget-posts-2', [
        'name' => 'Popular Reviews'
    ])
    <div class="row mt-5">
        <div class="col-sm-12">
            <h5 class="text-muted font-weight-medium mb-3">Reviews</h5>
        </div>
    </div>
    <div class="row mb-4">
        @foreach ($category->posts as $post)
        <div class="col-sm-3 mb-5 mb-sm-2">
            <div class="position-relative image-hover">
                <img src="{{ $post->thumbnail }}" class="img-fluid" alt="world-news" />
                <span class="thumb-title">{{ $category->name }}</span>
            </div>
            <h5 class="font-weight-600 mt-3">
                {{ $post->title }}
            </h5>
        </div>
        @endforeach
    </div>
    
</div>

@endsection