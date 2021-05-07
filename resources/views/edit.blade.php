

   @extends('index')
   @section('title', 'contact')

   @section('content')
    <div class="about_section_2 layout_padding">
        <div class="container">
            <h1 class="contact_text_2"><strong>CONTACT US</strong></h1>
            <p class="client_long_text">It is a long established fact that a reader will be distracted by the readable</p>
        </div>
    </div>
    <div class="contact_section ">
        <div class="row">
            <div class="col-md-6 background_bg">
                <div class="contact_bg">
                    <div class="input_main">
                       <div class="container">
                        <h2 class="request_text">REQUEST A CALL BACK</h2>
                          <form action="../data_update/{{$showarr->id}}" method='post'>
                          @csrf
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Your Name" name="name" value="{{$showarr->name}}" required>
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="title" name="title" value="{{$showarr->title}}" required>
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="description" name="description" value="{{$showarr->description}}" required>
                            </div>
                            <input type="submit" name="update" />
                          </form>
                       </div> 
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="560" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
   
  @endsection




