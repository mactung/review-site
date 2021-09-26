@extends('main')
@section('content')
<div class="container">
    @include('inc.posts-top')
    @include('inc.recent-posts-home')
    @include('inc.widget-slide-posts', [
        'widgetName' => 'Wolrd news',
        'data' => $recentPosts
    ])
    @include('inc.list-category')
</div>
@endsection