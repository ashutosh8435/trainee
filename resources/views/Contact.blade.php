

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
                          <form id="contactform">
                          @csrf
                          {{ method_field('post') }}
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Your Name" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="title" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="description" id="description" name="description" required>
                            </div>
                            <button  class="btn btn-primary"   id="save">submit</button>
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
    @push("script")
  <script >

/*$('#save').on('click',function(e){

      e.preventDefault();
      var name= $("#name").val();
      var title= $("#title").val();
      var description= $("#description").val();
     
      var _token= $("input[name=_token]").val();

      $.ajax({

        url:"{{route('data_submit')}}",
        method:"post",
        data:{
          name:name,
          title:title,
          description:description,
          _token:_token
        },
        success:function(response)
        {
          console.log(data);
        }
      });



}
);*/



  </script>

  <script>
  
$('#save').click(function(){
   var name= $("#name").val();
      var title= $("#title").val();
      var description= $("#description").val();
     
      $.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
}
});
$.ajax({
type:'POST',
url:"{{ url('data_submit') }}",
data:{
         name:name,
          title:title,
          description:description,
},
success:function(data){
console.log(data);
}
});

});
  </script>
  @endpush
  
  @endsection




