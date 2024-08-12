<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/icon/icon.png')}}">

    <!-- link -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" > 

</head>
<body>
    
@include('admin.layout.adminNav')

<div class="container-fluid mt-1">
    <div class="row">
      <div class="col-2 ps-4  border-end border-4">
        @include('admin.layout.adminMenu')
      </div>
      <div class="col-10">
        @yield('content')
      </div>
    </div>
  </div>










<script src="{{asset('js/jquery.slim.min.js')}}"> </script>
<script src="{{asset('js/popper.min.js')}}"> </script>
<script src="{{asset('js/bootstrap.min.js')}}"> </script>  
<script src="{{asset('js/custom.js')}}"> </script>
</body>
</html>