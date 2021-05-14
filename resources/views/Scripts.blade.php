<script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         </script> 


   <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }


   $('#save').on('click', function(e) {

var name= $("#name").val();
var title= $("#title").val();
var description= $("#description").val();

$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
e.preventDefault();
$.ajax({
type:'POST',
url:"{{ url('data_submit') }}",
data:{
name:name,
title:title,
description:description,
_token:"{{csrf_token()}}",
},
success:function(data){
   window.location.href = 'show';
}
});

});




$('#about').on('click', function(e) {


var title= $("#title").val();
var description= $("#description").val();

$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
e.preventDefault();
$.ajax({
type:'POST',
url:"{{ url('data_about') }}",
data:{
name:name,
title:title,
description:description,
_token:"{{csrf_token()}}",
},
success:function(data){
   console.log(data);
   window.location.href = 'about';
}
});

});

//our price ajax

/*$('#ourprice').on('click', function(e) {

var pname= $("#pname").val();
var price= $("#price").val();
var title= $("#title").val();
var description= $("#description").val();

$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
e.preventDefault();
$.ajax({
type:'POST',
url:"{{ url('data_price') }}",
data:{
pname:pname,
price:price,
title:title,
description:description,
_token:"{{csrf_token()}}",
},
success:function(data){
   console.log(data);
   window.location.href = 'price';
}
});

});
*/

//gym ajax
$('#gym').on('click', function(e) {

var image= $("#image").val();
//var price= $("#price").val();
var title= $("#title").val();
var description= $("#description").val();

$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
e.preventDefault();
$.ajax({
type:'POST',
url:"{{ url('data_gym') }}",
data:{
//image:image,
//price:price,
title:title,
description:description,

image:image,
_token:"{{csrf_token()}}",
},
success:function(data){
   console.log(data);
   window.location.href = 'gym';
}
});

});

//ajax category
$('#category').on('click', function(e) {

var c_name= $("#cname").val();
//var price= $("#price").val();
//var title= $("#title").val();
//var description= $("#description").val();

$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
e.preventDefault();
$.ajax({
type:'POST',
url:"{{ url('data_category') }}",
data:{
//image:image,
//price:price,
cname:cname,
_token:"{{csrf_token()}}",
},
success:function(data){
   console.log(data);
   window.location.href = 'category1';
}
});

});
</script>

