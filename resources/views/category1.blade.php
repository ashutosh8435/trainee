@extends('index')
@section('title', 'about1')

@section('content')
   
   
<div class="about_section_2 layout_padding">
        <div class="container">
            <h1 class="contact_text_2"><strong>about US</strong></h1>
            <p class="client_long_text">It is a long established fact that a reader will be distracted by the readable</p>
        </div>
    </div>
    <div class="contact_section ">
        <div class="row">
            <div class="col-md-6 background_bg">
                <div class="contact_bg">
                    <div class="input_main">
                       <div class="container">
                        <h2 class="request_text">about details</h2>
                          <form id="categoryform">
                          @csrf
                          
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="categoryname" id="c_name" name="c_name" required>
                            </div>
                            
                            <input class="btn btn-primary" type="button" id="category" value="submit">
                          </form>
                       </div> 
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
       
    <!-- about section end -->
    <!-- footer section start -->
    @endsection