
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
                       @if($message=Session::get('success'))
                          <div class="alert alert-success alert-block">
                             <strong>{{$message}}</strong>
                             </div>
                        @endif
                        <h2 class="request_text">price details</h2>
                          <form  action="../priceupdate/{{$priceedit->id}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                              <input type="text" class="email-bt" placeholder="plan name" id="pname" name="pname" value="{{$priceedit->pname}}">
                              <span class="tetx-danger">{{$errors->first('pname')}}</span>
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="price" id="price" name="price" value="{{$priceedit->price}}">
                              <span class="tetx-danger">{{$errors->first('price')}}</span>
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="title" id="title" name="title" value="{{$priceedit->title}}">
                              <span class="tetx-danger">{{$errors->first('title')}}</span>
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="description" id="description" name="description" value="{{$priceedit->description}}" >
                              <span class="tetx-danger">{{$errors->first('description')}}</span>
                            </div>
                          <!--  <input class="btn btn-primary" type="button"  value="submit">-->
                          <button type="submit" class="btn btn-primary">update</button>
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