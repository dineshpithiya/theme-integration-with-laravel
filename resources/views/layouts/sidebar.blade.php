<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body class="theme-red">
	<nav>
		@include('includes.navbar')
	</nav>
	<header>
		@include('includes.header')
	</header>
	<sidebar>
		@include('includes.sidebar')
	</sidebar>	
	<content>
		@yield('content')
	</content>
	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>