<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon">

	<title>后台管理程序</title>
	<meta name="description" content="page.description" />

	{!! Html::style('plug-in/bootstrap/css/bootstrap.min.css') !!}
	{!! Html::style('plug-in/font-awesome/css/font-awesome.min.css') !!}
	{!! Html::style('plug-in/ionicons/css/ionicons.min.css') !!}
	{!! Html::style('plug-in/AdminLTE/css/AdminLTE.min.css') !!}
	{!! Html::style('plug-in/AdminLTE/css/skins/_all-skins.min.css') !!}
	@yield('style')
	{!! Html::style('assets/css/default.css') !!}
</head>
<body class="skin-blue">
	<div class="wrapper">
		@include('admin.layouts.nav')
		@include('admin.layouts.sidebar')
		<div class="content-wrapper">
			@include('admin.layouts.breadcrumbs')
			<section class="content">
				@yield('content')
			</section>
		</div>
		@include('admin.layouts.footer')
	</div>
	
	{!! Html::script('/plug-in/jquery/jQuery-2.1.3.min.js') !!}
	{!! Html::script('/plug-in/bootstrap/js/bootstrap.min.js') !!}
	{!! Html::script('/plug-in/slimScroll/jquery.slimScroll.min.js') !!}
	{!! Html::script('/plug-in/fastclick/fastclick.min.js') !!}
	{!! Html::script('/plug-in/AdminLTE/js/app.min.js') !!}
	{!! Html::script('/plug-in/AdminLTE/js/demo.js') !!}
	@yield('script')
</body>
</html>