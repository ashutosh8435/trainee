@extends('index')
@section('title', 'about')

@section('content')
    <div class="about_section_2 layout_padding">
        <div class="container">
            <h1 class="about_text_2"><strong>ABOUT US</strong></h1>
            <p class="client_long_text">It is a long established fact that a reader will be distracted by the readable</p>
        </div>
    </div>
    @foreach($aboutarr as $at)
    <div class="about_section about_main">
        <div class="row">
            <div class="col-md-6">
                <div class="about_taital">
                    <h1 class="about_text">{{$at->title}}</h1>
                    <p class="long_text_2">{{$at->description}}</p>
                    <div class="about_bt"><a href="#">ABOUT MORE</a></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_img"><img src="images/about-bg.png"></div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- about section end -->
    <!-- footer section start -->
    @endsection