@extends('client.layouts.master')
@section('title')
Trang Single
@endsection
@section('content')
<body class="single">
    @if ($post)
<div id="fh5co-title-box" style="background-image: url({{ asset('storage/images/' .$post->image) }}); background-position: 50% 90.5px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="page-title">
        <span>{{$post->created_at}} </span>
        <h2>{{$post->title}}</h2>
    </div>
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <p>
                    {{$post->content}}
                </p>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <a href="#" class="fh5co_tagg">Business</a>
                    <a href="#" class="fh5co_tagg">Technology</a>
                    <a href="#" class="fh5co_tagg">Sport</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                    <a href="#" class="fh5co_tagg">Photography</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Education</a>
                    <a href="#" class="fh5co_tagg">Social</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                </div>
    @foreach ($RamdomPosts as $post)
        <div class="row pb-3">
            <div class="col-5 align-self-center">
                <img src="{{ asset('storage/images/' .$post->image) }}" alt="img" class="fh5co_most_trading"/>
            </div>
            <a href="{{route('client.single', ['id'=>$post->id])}}"><div class="col-7 paddding">{{$post->title}}</a>
                <div class="most_fh5co_treding_font"> </div>
                <a href="{{route('client.single', ['id'=>$post->id])}}"><div class="most_fh5co_treding_font_123"> {{$post->created_at}}</div></a>
            </div>
        </div>
    @endforeach

            </div>
        </div>
    </div>
</div>
@endif
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
    @foreach ($HotPosts as $post)
        <div class="item px-2">
            <div class="fh5co_hover_news_img">
                <div class="fh5co_news_img"><img src="{{ asset('storage/images/' .$post->image) }}" alt=""/></div>
                <div>
                    <a href="{{route('client.single', ['id'=>$post->id])}}" class="d-block fh5co_small_post_heading"><span class="">{{$post->title}}</span></a>
                    <div class="c_g"><i class="fa fa-clock-o"></i> {{$post->created_at}}</div>
                </div>
            </div>
        </div>
    @endforeach

        </div>
    </div>
</div>
</body>
@endsection
