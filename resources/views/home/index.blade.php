<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>Home page</title>
</head>
<body>
<nav>

<label>Blogweb</label>

<ul>
	<li>
		<a href="">Home</a>


	</li>
	<li>
		<a href="">Contact</a>


	</li>
	@if (Route::has('login'))

	@auth
	<li>

		<a href="{{ url('/dashboard') }}" class = "btn btn-success">{{ Auth::user()->name }}</a>
</li>

@else

<li>
	<a href ="{{ route('register') }}" class="btn btn-success">Register</a>
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
</li>
@endauth
@endif


</ul>

</nav>

@foreach($post as $post )



<div class="book">
 
<h1>{{$post->username}} </h1>

<p>{{$post->description}}</p>

 <!--<img src="/post{{$post->image}}" height="500px" width="100%px">-->

 <img src="{{ asset('post/' . $post->image) }}" alt="Post Image"height="500px" width="100%px">
</div>
@endforeach

</body>

</html>