<!DOCTYPE html>
<html>
	<head>
		<title>p3</title>
		<link href="{!! asset('css/masterView.css') !!}" rel="stylesheet" type="text/css" >
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
		<script src="https://use.fontawesome.com/823a48b1f0.js"></script>
	</head>

	<body>
		<div class="container">

		<header>
            <h1><a class='home' href='/'>Developer's Best Friend</a></h1>
            <ul class="nav-bar">
                <li><a href="/lorem/create"><i class="fa fa-pencil" aria-hidden="true"></i>   Lorem Ipsum Generator<a></li>
                <li><a href="/user/create"><i class="fa fa-user" aria-hidden="true"></i>   Random User Generator<a></li>
            </ul>
		</header>

		<section>
			@yield('content')
		</section>

		<footer>
		</footer>

		</div>
	</body>


</html>
