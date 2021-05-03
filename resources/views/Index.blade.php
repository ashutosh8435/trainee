<!DOCTYPE html>
<html lang="en">
<head>
@include('style')

</head>
<body>
	
   @include('header')
   
   
    @include('maincontent')
    @yield('content')
    
    @include('footer')
   
   @include('scripts')


     
</body>
</html>