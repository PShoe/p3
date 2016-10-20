<!DOCTYPE html>
<html>
	<head>
		<title>p3</title>
		<link rel="stylesheet" type="text/css" href="css/masterView.css">
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	</head>

	<body>
		<div class="container">

		<header>
            <h1>Developer's Best Friend</h1>
            <ul class="nav-bar">
                <li><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i>   Lorem Ipsum Generator<a></li>
                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>   Random User Generator<a></li>
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
