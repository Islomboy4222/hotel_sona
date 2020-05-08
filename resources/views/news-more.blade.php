@extends('layouts/app', ['title' => 'More'])

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
                        
                            <div class="bi-text">
                                
                                    <h2>{{ $post->title }}</h2>
                                
                                <span class="b-tag"> {{ $post->short }} </span>
                                
                                <p> {{$post->content}} </p>
                            </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection