<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('frontend/dist/assets/images/favicon.ico')}}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('frontend/dist/assets/css/style.css')}}">

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

    {{-- navbar start --}}
    @include('includes.navbar.navbar');
    {{-- navbar end --}}

    {{-- Header Start --}}
    @include('includes.header.header')
    {{-- Header End --}}

    <!-- [ Main Content ] start -->
    @yield('content')
	

    <!-- Required Js -->
    <script src="{{asset('frontend/dist/assets/js/vendor-all.min.js')}}"></script>
    <script src="{{asset('frontend/dist/assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/dist/assets/js/ripple.js')}}"></script>
    <script src="{{asset('frontend/dist/assets/js/pcoded.min.js')}}"></script>

{{-- <!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script> --}}
</body>

</html>
