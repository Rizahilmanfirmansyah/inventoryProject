<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>SIPERBA_lgn</title>
		<meta name="description" content="Ela Admin - HTML5 Admin Template">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		{{-- <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png"> --}}
		{{-- <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png"> --}}
	
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
		{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"> --}}
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
		<!--DataTable-->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
		{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> --}}
		<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
		<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
		<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>  
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<!--Fixed-->
		{{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.1.0/css/fixedColumns.dataTables.min.css"> --}}
		<!--Style-->
		<link rel="stylesheet" href="{{ asset('e_admin/css/cs-skin-elastic.css')}}">
		<link rel="stylesheet" href="{{ asset('e_admin/css/style.css')}}">
		<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
		<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
	
		<link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
		<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.0/sweetalert2.min.css" integrity="sha512-A374yR9LJTApGsMhH1Mn4e9yh0ngysmlMwt/uKPpudcFwLNDgN3E9S/ZeHcWTbyhb5bVHCtvqWey9DLXB4MmZg==" crossorigin="anonymous" />
	
	
	
		@livewireStyles
	   <style>
		#weatherWidget .currentDesc {
			color: #ffffff!important;
		}
			.traffic-chart {
				min-height: 335px;
			}
			#flotPie1  {
				height: 150px;
			}
			#flotPie1 td {
				padding:3px;
			}
			#flotPie1 table {
				top: 20px!important;
				right: -10px!important;
			}
			.chart-container {
				display: table;
				min-width: 270px ;
				text-align: left;
				padding-top: 10px;
				padding-bottom: 10px;
			}
			#flotLine5  {
				 height: 105px;
			}
	
			#flotBarChart {
				height: 150px;
			}
			#cellPaiChart{
				height: 160px;
			}
			.countCart{
				position: relative;
			}
			.countCart span{
				position: absolute;
				top: -4px;
				right: 15px;
				display: block;
			}
	
			body{
				/* background-color: #f0eeee; */
				background-color: #f8f8f8;
			}
			.form-group{
				margin-top: 12px;
			}
			/* tr{
				text-align: center;
			}
			th{
				text-align: center
			} */
	
			
	
		</style>
	</head>
<body class="home-page home-01 ">

    @yield('content')

	<!--footer area-->
</body>
	{{-- <script src="{{ asset('e_user/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{ asset('e_user/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('e_user/js/chosen.jquery.min.js')}}"></script>
	<script src="{{ asset('e_user/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('e_user/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('e_user/js/functions.js')}}"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.0/sweetalert2.all.min.js" integrity="sha512-LXVbtSLdKM9Rpog8WtfAbD3Wks1NSDE7tMwOW3XbQTPQnaTrpIot0rzzekOslA1DVbXSVzS7c/lWZHRGkn3Xpg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{asset('e_admin/js/main.js')}}"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="{{asset('e_admin/js/init/weather-init.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    {{-- <script src="https://cdn.tiny.cloud/1/g9j399iuok83vb7tkyzvjkzvmkz4puzodkt6jt8vr1j9ma1l/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <script src="{{asset('e_admin/js/init/fullcalendar-init.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</html>