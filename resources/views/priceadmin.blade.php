
   @extends('index')
@section('title', 'priceadmin')

@section('content')
   
   
<div class="about_section_2 layout_padding">
        <div class="container">
            <h1 class="contact_text_2"><strong>price</strong></h1>
            <p class="client_long_text">It is a long established fact that a reader will be distracted by the readable</p>
        </div>
    </div>
    



 


    <div class="contact_section ">
        <div class="row">
            <div class="col-md-6 background_bg">
                <div class="contact_bg">
                    <div class="input_main">
                       <div class="container">
                        <h2 class="request_text">price details</h2>
                          <form id="ourpriceform">
                          @csrf
                          <div class="form-group">
                              <input type="text" class="email-bt" placeholder="plan name" id="pname" name="pname" >
                            
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="price" id="price" name="description" >
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="title" id="title" name="title" >
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="description" id="description" name="description" >
                            </div>
                            <input class="btn btn-primary" type="button" id="ourprice" value="submit">
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