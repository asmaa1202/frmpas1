<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FRMPAS</title>
    <!-- Fav Icon -->
    <link rel="icon" href="{{asset('assets/img/Logo_FRMPAS.png')}}" type="image/x-icon">
    <!-- Fav Icon -->
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/animations.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" class="color-switcher-link">
	<link rel="stylesheet" href="{{asset('assets/css/shop.css')}}" class="color-switcher-link">
	<script src="{{asset('assets/js/vendor/modernizr-2.6.2.min.js')}}"></script>

    <!-- Style-->
  
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
 
    @yield('custom-css')

</head>

<body>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">

		</div>
	</div><!-- eof .modal -->


	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->
			@include('layout.header')
            @yield('content')
			@include('layout.footer')

		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->



    <!---========================== javascript ==========================-->
   
	<script src="{{asset('assets/js/compressed.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>
	<script src="{{asset('assets/js/switcher.js')}}"></script>
    @yield('custom-js')
    <!---========================== javascript ==========================-->
</body>

</html>