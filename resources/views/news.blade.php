@extends('layouts/app', ['title' => 'News'])

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Blog</h2>
                        <div class="bt-option">
                            <a href="{{ route('home') }}">Home</a>
                            <span>Blog Grid</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- Blog Section Begin -->
    <section class="blog-section blog-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item set-bg" data-setbg="img/blog/blog-1.jpg">
                        @foreach($posts as $post)
                            <div class="bi-text">
                                <a href="{{route('news-more', $post->id)}}">
                                    <h2>{{ $post->title }}</h2>
                                </a>
                                <span class="b-tag"> {{ $post->short }} </span>
                                <div class="b-time">
                                    <i class="icon_calendar"></i> 
                                    {{ $post->created_at->format('d') }}
                                    {{ $post->created_at->format('M') }}

                                </div>
                                <!-- <ul class="blog-info-link">
                                    <li><i class="fa fa-eye"></i>{{$post->views}}</li>
                                </ul> -->
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection