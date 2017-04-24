<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title', 'Ade Widyatama Dian Boernama') | FrameWork</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<style type="text/css">
		body{
			padding-top: 70px;
			padding-bottom: 70px
		}

		.startter-template{
			padding: 40px 15px;
			text-align: center;
		}

		.form-horizontal{
			padding: 15px 10px;
		}

		footer{
			padding-top: 15px;
			text-align: right;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{url('/')}}" class="navbar-brand">Framework</a>
			</div>
		</div>
	</nav>
<div class="clearfix"></div>
	<div class="col-md-4 col-md-offset-4">
		@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>masuk aplikasi</strong>
			</div>
			{!!Form::open(['url'=>'login','class'=>'form-horizontal'])!!}
				<div class="form-group">
					<label class="col-sm-4 control-label">username</label>
					<div class="col-sm-8">
						{!!Form::text('username',null,['class'=>'form-control','placeholder'=>"username"])!!}
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">password</label>
					<div class="col-sm-8">
						{!!Form::text('password',null,['class'=>'form-control','placeholder'=>"password"])!!}
					</div>
				</div>
				<div style="width: 100%;text-align:right;">
					<button class="btn btn-primary"><i class="fa fa-lock"></i>masuk</button>
					<button class="btn btn-danger"><i class="fa fa-undo"></i>ulangi</button>
				</div>
				{!! form::close() !!}
		</div>
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom">
		<footer class="container">
		created by <a href="google.com"><span><i class="fa fa-instagram" style="color:salmon"></i>@EnggaPunyaAkun</span></a>	
		</footer>
	</nav>
	<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript">
		$(function(){
			$('[data-toggle="tooltip"]').tooltip()
		});
	</script>
</body>
</html>