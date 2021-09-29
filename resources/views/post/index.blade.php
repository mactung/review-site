@extends('main')
@section('css')
<style>
    .post-content img {
        width: 100%;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-9 w-100 p-3">
            <div class="text-center">
                <h1>
                    {{ $post->title }}
                </h1>
                <div>
                    <a href="#" class="btn btn-dark font-weight-bold mb-4">{{ $post->category->name }}</a>
                </div>
                <p class="fs-15 d-flex justify-content-center align-items-center m-0">
                    <img src="../assets/images/dashboard/Profile_1.jpg" alt="" class="img-xs img-rounded mr-2" />
                    TopGoodProducts | {{$post->created_at->format('M d, Y')}}
                </p>
                <p class="pt-4 pb-4">
                    {{ $post->description }}
                </p>
            </div>
            <img src="{{ $post->thumbnail }}" alt="news" class="img-fluid mb-4" />
            <div class="mt-5 w-100 post-content">
                {!! $post->content !!}
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-3">
            <div class="position-sticky" style="top: 80px; margin-top: 1rem;">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-flex position-relative float-left">
                            <h3 class="section-title">Latest Reviews</h3>
                        </div>
                    </div>
                    @foreach ($recentPosts as $recentPost)
                        <div class="col-sm-12">
                            <div class="border-bottom pb-3">
                                <h5 class="font-weight-600 mt-0 mb-0">
                                    {{ $recentPost->title }}
                                </h5>
                                <p class="text-color m-0 d-flex align-items-center">
                                    <span class="fs-10 mr-1">{{$recentPost->created_at->format('M d, Y')}}</span>
                                    <i class="mdi mdi-bookmark-outline mr-3"></i>
                                    {{-- <span class="fs-10 mr-1">126</span>
                                    <i class="mdi mdi-comment-outline"></i> --}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    @include('inc.widget-slide-posts', [
    'widgetName' => 'Releated Reviews',
    'data' => $recentPosts
    ])
</div>

@endsection