<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to KIMIA Proficiency Testing Online System</title>
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('css/kimia2.css') }}">
	<link rel="stylesheet" href="{{ asset('css/kimia1.css') }}">
	<link rel="stylesheet" href="{{ asset('css/kimia3.css') }}">
	<link rel="stylesheet" href="{{ asset('css/kimia4.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive2.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive1.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive3.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive4.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

</head>
<body>
		<div id="main-content" class="container-fluid">
			<div id="header" class="container">
				<div class="header-top row">
					<div class="col-sm-9">
		  			<img class="logo-ptos" src="images/ptos-logo.png">
		  			<img src="images/logo-crest-msia.png">
		  			<img src="images/logo-kimia.png">
		  			<img src="images/logo-negaraku.png">
		  		</div>
			  	<div class="col-sm-3 header-right">
			  		<span class="icon-setting"></span>
			  		  <div id="w3c-content"><span class="ikon-jkt-w3c-font ikon-jkt-w3c-font-big">&nbsp;</span> <span class="ikon-jkt-w3c-font ikon-jkt-w3c-font-normal">&nbsp;</span> <span class="ikon-jkt-w3c-font ikon-jkt-w3c-font-small">&nbsp;</span> <span class="ikon-jkt-w3c-color ikon-jkt-w3c-color-first">&nbsp;</span> <span class="ikon-jkt-w3c-color ikon-jkt-w3c-color-second">&nbsp;</span> <span class="ikon-jkt-w3c-color ikon-jkt-w3c-color-third">&nbsp;</span> <span class="ikon-jkt-w3c-color ikon-jkt-w3c-color-reset">&nbsp;</span></div>
			  		<span class="register"><a href="{{ URL::to('/reg')}}">REGISTER</a></span>
			  		<span class="login" data-toggle="modal" data-target="#myModal"><a href="#">LOGIN</a></span>
			  	</div>
				</div>
		  	<div class="menu row">
		  		 <nav class="navbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a class="active" href="{{ URL::to('')}}">Home</a></li>
                    <li><a href="{{ URL::to('/about')}}">About Us</a></li>
                    <li><a href="#">Proficiency Testing</a></li>
                    <li><a href="#">Quality Control Materials</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
                <!-- /.navbar-collapse -->
              </nav>
		  	</div>
		  </div>
		  <!-- popup login -->
		  <div class="modal fade login-page" id="myModal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="close-button"></span></button>
			        <h4 class="modal-title">Login</h4>
			      </div>
			      <div class="modal-body">
			        <form role="form" class="form-horizontal" role='form' method="POST" action="authenticate">
                        {{ csrf_field() }}
								<label class="email-icon  col-md-4">Email</label> <div class="col-md-8"><input type="email" name="username" class="form-control"></div><br><br>
								<label class="password-icon col-md-4">Password</label><div class="col-md-8"> <input type="password" name="password" class="form-control"> </div><br><br>
								<div class="column-left">Captcha</div>
								<div class="column-right">
									<p class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"></p>
									<p><input id="checkBox" type="checkbox"><span class="rememberme">Remember me</span></p>
									<p><a href="#">Forget Password?</a> | <a href="#">Register</a></p>
									<input type="submit" value="Login">
								</div>
								
							</form>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			@yield('content')
			<footer class="footer">
				<div class="row">
					<div class="col-sm-3">Copyright 2017 &copy; PTOS</div>
					<div class="col-sm-9 best-view">
						<div class="best-text">Best viewed with 1024 x 768 resolution using latest browsers</div>
						<div class="footer-content">
							<span class="arrow-footer"></span>
						</div>
					</div>
				</div>
			</footer>
	</div>

	<script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="{{ asset('js/kimia1.js') }}"></script>
	<script src="{{ asset('js/kimia2.js') }}"></script>
	<script src="{{ asset('js/kimia3.js') }}"></script>
</body>
</html>