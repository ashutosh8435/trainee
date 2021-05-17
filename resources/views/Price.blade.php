@extends('index')
@section('title', 'Price')

@section('content')
    <!-- header section end -->
    <!-- our price section start -->   
    <div class="our_price_section layout_padding about_main">
        <div class="container">
            <h1 class="our_price"><strong>OUR PRICE</strong></h1>
            <p class="client_long_text">t is a long established fact that a reader will be distracted by the readable content 
            of a page when looking at its layout. The point of using Lorem Ipsum is tha</p>
            <div class="price_section_2">
                <div class="row">
                @foreach( $pricearr as $user)

                
                    <div class="col-sm-12 col-lg-4">
                        <div class="beginner">
                            <h2 class="beginner_text">{{ $user->pname }}</h2>
                            <h1 class="plan_text">${{ $user->price }}</h1>
                            <P class="access_text">{{$user->title}}</P>
                           
                            <P class="access_text">{{$user->description}}</P>
                            <P class="free_text">1 Free personal training</P>
                        </div>
                        <div class="select_boton">
                            <div class="select_bt"><a href="data_delete/{{$user->id}}">delete plan</a></div>
                        </div>
                        <div class="select_boton">
                            <div class="select_bt"><a href="priceedit/{{$user->id}}">edit</a></div>
                        </div>
                    </div>
                    @endforeach
                
                </div>
            </div>
        </div>
    </div> 
    <!-- our price section end -->   
    <!-- footer section start -->
    @endsection