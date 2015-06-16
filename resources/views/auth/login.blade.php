@extends('layouts.start')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div id = "loginform" class="col-md-8 col-md-offset-2">
			<div class="row">
				 	<div class = "col-md-7 col-md-offset-3" style="margin-bottom:10px;"><h3>Masuk</h3></div>
			</div>
			<div class="row">
				<div class="col-md-7 col-md-offset-3">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
				</div>
				<div>
					<form class="form-horizontal" role="form" method="POST" action="">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group loginformg">
							<label class="col-md-3 control-label"></label>
							<div class="col-md-7">
								<input type="text" class="form-control logininput" name="username" placeholder="Username">
							</div>
						</div>

						<div class="form-group" style = "margin-bottom: 5px;">
							<label class="col-md-3 control-label login" ></label>
							<div class="col-md-7">
								<input type="password" class="form-control logininput" name="password" placeholder="Password">
							</div>
						</div>

						<div class="form-group" style = "margin-bottom: 5px;">
							<div class="col-md-7 col-md-offset-3">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>
						<div class="form-group" style = "margin-top: 5px;">
							<div class="col-md-7 col-md-offset-3" style = "padding-top: 10px; border-top: 1px solid #cacaca">
								<button id = "loginbutton" type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Login
								</button>

								<a style = 'color: #2EA08F !important' href="{{ URL::to('forgetpassword') }}">Lupa Password Anda?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
