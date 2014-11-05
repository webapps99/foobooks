<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','Foobooks')</title>
	<meta charset='utf-8'>

	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='/css/foobooks.css' type='text/css'>

	@yield('head')


</head>
<body>

	<a href='/'><img class='logo' src='/images/laravel-foobooks-logo@2x.png' alt='Foobooks logo'></a>

	<a href='https://github.com/susanBuck/foobooks'>View on Github</a>

	<nav>
		<ul>
			<li><a href='/list'>List All</a></li>
			<li><a href='/add'>+ Add Book</a></li>
		</ul>
	</nav>

	@yield('content')

	@yield('body')

</body>
</html>



