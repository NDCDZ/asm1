@extends('client.layouts.master')
@section('title')
TrangBlog
@endsection
@section('content')

<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                </div>
    @foreach ($NewPosts as $post)
        <div class="row pb-4">
            <div class="col-md-5">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{ asset('storage/images/' .$post->image) }}" alt=""/></div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-7 animate-box">
                <a href="{{route('client.single', ['id'=>$post->id])}}" class="fh5co_magna py-2">{{$post->title}}</a>
                <a href="{{route('client.single', ['id'=>$post->id])}}" class="fh5co_mini_time py-3"> {{$post->view}} - {{$post->created_at}} </a>
                <div class="fh5co_consectetur"> {{$post->content}}
                </div>
            </div>
        </div>
    @endforeach


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
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Đáng quan tâm</div>
                </div>
        @foreach ($RamdomPosts as $post)
            <div class="row pb-3">
                <div class="col-5 align-self-center">
                    <img src="{{ asset('storage/images/' .$post->image) }}" alt="img" class="fh5co_most_trading"/>
                </div>
                <div class="col-7 paddding">
                    <a href="{{route('client.single', ['id'=>$post->id])}}"><div class="most_fh5co_treding_font"> {{$post->title}}</div></a>
                    <a href="{{route('client.single', ['id'=>$post->id])}}"><div class="most_fh5co_treding_font_123"> {{$post->content}}</div></a>
                </div>
            </div>
        @endforeach

            </div>
        </div>
        <div class="row mx-0">
            <div class="col-12 text-center pb-4 pt-4">
                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                <a href="#" class="btn_pagging">1</a>
                <a href="#" class="btn_pagging">2</a>
                <a href="#" class="btn_pagging">3</a>
                <a href="#" class="btn_pagging">...</a>
                <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
             </div>
        </div>
    </div>
</div>
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
                    <div class="c_g"><i class="fa fa-clock-o"></i> {{$post->view}}</div>
                </div>
            </div>
        </div>
    @endforeach

        </div>
    </div>
</div>

@endsection
