<!DOCTYPE html>
<html>
<head>
	<title>tutor laravel percobaan</title>
	 <link rel="stylesheet" href="{{url('assets/css/material-dashboard.css')}}">
	 <script src="{{url('assets/js/material-dashboard.js')}}"></script>
</head>
<body>

	<header>
		
		<h2>Blog Percobaan</h2>
		<nav>
			<a href="/blog">Home</a>
			|
			<a href="/blog/tentang">Tentang</a>
			|
			<a href="/blog/kontak">Kontak</a>
		</nav>
	</header>
	<hr/>
	<br><br>

	<!-- bagian judul  -->
	<h3>@yield('judul_halaman')</h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br><br>
	<hr>

	<footer>
		<p>&copy; fghjk</p>
	</footer>

</body>
</html>