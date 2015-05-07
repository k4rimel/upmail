<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
   	<script type="text/javascript" src="js/vendor/jquery-1.11.3.min.js"></script>
   	<script type="text/javascript" src="js/vendor/jquery.form-validator.min.js"></script>
   	<script type="text/javascript" src="js/vendor/materialize/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/vendor/materialize/materialize.min.css" />
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<title>UpMail</title>
</head>
<body>
	@section('nav')
	<nav>
	   <div class="nav-wrapper light-blue accent-2">
	     <a href="#" class="brand-logo"><i class="tiny mdi-action-wallet-travel"></i> </a>
	   </div>
	 </nav>
	@show
	<div class="container" style="padding: 25px 0px;">
		 @yield('content')
	</div>
</body>
</html>