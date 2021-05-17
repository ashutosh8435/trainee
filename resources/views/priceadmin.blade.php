
@extends('index')
@section('title', 'priceadmin')
@section('content')
   
    <div class="contact_section ">
        <div class="row">
            <div class="col-md-6 background_bg">
                <div class="contact_bg">
                    <div class="input_main">
                       <div class="container">
                          @if($message=Session::get('success'))
                          <div class="alert alert-success alert-block">
                             <strong>{{$message}}</strong>
                             </div>
                        @endif
                        <h2 class="request_text">price details</h2>
                          <form  action="{{url('ourprice')}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                              <input type="text" class="email-bt" placeholder="plan name" id="pname" name="pname" >
                              <span class="tetx-danger">{{$errors->first('pname')}}</span>
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="price" id="price" name="price" >
                              <span class="text-danger">{{$errors->first('price')}}</span>
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="title" id="title" name="title" >
                              <span class="text-danger">{{$errors->first('title')}}</span>
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="description" id="description" name="description" >
                              <span class="text-danger">{{$errors->first('description')}}</span>
                            </div>
                          <!--  <input class="btn btn-primary" type="button"  value="submit">-->
                          <button type="submit" class="btn btn-primary">Submit</button>
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