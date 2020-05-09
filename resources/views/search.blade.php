@extends('layouts/app', ['title' => 'News'])

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Blog</h2>
                        <aside class="single_sidebar_widget search_widget">
                            <form method="GET" action="{{route('search')}}">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="key" placeholder="Qidiruv..." >
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>
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
                @foreach($results as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item set-bg" data-setbg="img/blog/blog-1.jpg">
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
                            <nav class="blog-pagination justify-content-center d-flex">
                                {{$results->links()}}
                            </nav>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection