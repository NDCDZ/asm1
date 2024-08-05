@extends('client.layouts.master')
@section('title')
Trang chủ
@endsection
@section('content')

<div class="container-fluid paddding mb-5">
    <!-- content -->
    <div class="row mx-0">
        <!-- Hiển thị bài viết mới nhất -->
        @if ($OnePosts)
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height"><a href="{{route('client.single', ['id'=>$OnePosts->id])}}"><img src="{{ asset('storage/images/' .$OnePosts->image) }}" alt="img"/></a>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><a href="{{route('client.single', ['id'=>$OnePosts->id])}}" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{$OnePosts->created_at}} </a></div>
                    <div class=""><a href="{{route('client.single', ['id'=>$OnePosts->id])}}" class="fh5co_good_font"> {{$OnePosts->title}} </a></div>
                </div>
            </div>
        </div>
        @endif

        <!-- Hiển thị 4 bài viết mới nhất -->
        <div class="col-md-6">
            <div class="row">
            @foreach ($FourPosts as $post)
            <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                <div class="fh5co_suceefh5co_height_2"><img src="{{ asset('storage/images/' .$post->image) }}" alt="img"/>
                    <div class="fh5co_suceefh5co_height_position_absolute"></div>
                    <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                        <div class=""><a href="{{route('client.single', ['id'=>$post->id])}}" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{$post->created_at}} </a></div>
                        <div class=""><a href="{{route('client.single', ['id'=>$post->id])}}" class="fh5co_good_font_2"> {{$post->title}} </a></div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>

</div>
<div class="container-fluid pt-3">
    <!-- content -->
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
            </div>
        <div class="owl-carousel owl-theme js" id="slider1">
    @foreach ($allPosts as $post)
    <div class="item px-2">
        <div class="fh5co_latest_trading_img_position_relative">
            <div class="fh5co_latest_trading_img"><img src="{{ asset('storage/images/' .$post->image) }}" alt=""
            class="fh5co_img_special_relative"/></div>
            <div class="fh5co_latest_trading_img_position_absolute"></div>
            <div class="fh5co_latest_trading_img_position_absolute_1">
                <a href="{{route('client.single', ['id'=>$post->id])}}" class="text-white">{{$post->title}} </a>
                <div class="fh5co_latest_trading_date_and_name_color">{{$post->created_at}}</div>
            </div>
        </div>
    </div>
    @endforeach

        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
<!-- content -->
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
    @foreach ($NewPosts as $post)
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
<div class="container-fluid fh5co_video_news_bg pb-4">
<!-- content -->
</div>
<div class="container-fluid pb-4 pt-4 paddding">
<!-- content -->
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Hot</div>
                </div>
    @foreach ($HotPosts as $post)
        <div class="row pb-4">
            <div class="col-md-5">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{ asset('storage/images/' .$post->image) }}" alt=""/></div>
                    <div></div>
                </div>
            </div>
            <div class="col-md-7 animate-box">
                <a href="{{route('client.single', ['id'=>$post->id])}}" class="fh5co_magna py-2">{{$post->title}}
                    </a> <a href="{{route('client.single', ['id'=>$post->id])}}" class="fh5co_mini_time py-3"> {{$post->view}} - {{$post->created_at}} </a>
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
        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
            <div class="col-12 text-center pb-4 pt-4">
                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                <a href="#" class="btn_pagging">1</a>
                <a href="#" class="btn_pagging">2</a>
                <a href="#" class="btn_pagging">3</a>
                <a href="#" class="btn_pagging">...</a>
                <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
            {{-- {{$randomPosts->link()}} --}}
             </div>
        </div>
    </div>
</div>
@endsection
