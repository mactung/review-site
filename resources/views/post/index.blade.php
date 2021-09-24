@extends('main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="news-post-wrapper">
                <div class="news-post-wrapper-sm ">
                    <h1 class="text-center">
                        {{ $post->title }}
                    </h1>
                    <div class="text-center">
                        <a href="#" class="btn btn-dark font-weight-bold mb-4">{{ $post->category->name }}</a>
                    </div>
                    <p class="fs-15 d-flex justify-content-center align-items-center m-0">
                        <img src="../assets/images/dashboard/Profile_1.jpg" alt="" class="img-xs img-rounded mr-2" />
                        Oka Tomoaki | 23 February, 2018
                    </p>
                    <p class="pt-4 pb-4">
                        {{ $post->description }}
                    </p>
                </div>
                <div class="text-center">
                    <img src="{{ $post->thumbnail }}" alt="news" class="img-fluid mb-4" />

                </div>

            </div>
        </div>
        <div class="col-sm-12 mt-5">
            {!! $post->content !!}
        </div>
    </div>

    @include('inc.widget-slide-posts', [
    'widgetName' => 'Releated Reviews',
    'data' => $recentPosts
    ])
</div>

@endsection