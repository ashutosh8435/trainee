@extends('index')
@section('title', 'gym')

    <!-- header section end -->
    <!-- our service section start -->
@section('content')
    <div class="our_section layout_padding">
      <div class="container">
        <h1 class="our_text"><strong>gym info</strong></h1>
        <p class="client_long_text">It is a long established fact that a reader will be distracted by the readable</p>
        <div class="row mt-4">
        @foreach($gymarr as $gym)
        
          <div class="col-lg-4 ">

          <div class="card" style="width: 18rem;">
                <img src="{{asset('images/'.$gym->image)}}" class="rounded img-fluid" alt="Cinque Terre"> 
                <div class="card-body">
                <h5 class="card-title">{{$gym->title}}</h5>
                <p class="card-text">{{$gym->description}}</p>
 
             <a href="gymedit/{{$gym->id}}" class="btn btn-primary">Edit</a>

             <a href="gymdelete/{{$gym->id}}" class="btn btn-primary">delete1</a>
         </div>
        </div>
        </div>
           
            @endforeach
            </div>
            <div class="bt_main">
              <div class="seemore_bt"><a href="#">See More</a></div>
            </div>
       
        
      </div>
    </div>
    <!-- our service section end -->
    <!-- project section start -->
    <div class="project_section layout_padding about_main">
        <div class="container">
            <h1 class="partner_text">PARTNER<br> UP-DOUBLE POWER</h1>
            <p class="lorem_ipsum_text">t is a long established fact that a reader will be distracted by the readable content 
                                        of a page when looking at its layout. The point of using Lorem Ipsum is tha</p>
            <div class="choice_main">
                <div class="choose_bt"><a href="#">CHOOSE YOUR TRAINER</a></div>
            </div>            
        </div>
    </div>
    <!-- project section end -->
    <!-- footer section start -->
    @endsection