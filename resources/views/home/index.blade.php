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
	<li>
		<a href="{{ route('register') }}" class = "btn btn-success">Register</a>


	</li>
<li>
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
</li>



</ul>

</nav>

<div class="book">
 
<h1>Blog book </h1>

<p>Books have a special power to transport us to new worlds, evoke powerful emotions, and spark our imagination. Whether you're curled up with a favorite novel or discovering a new author, reading can be a transformative experience that broadens our perspective and deepens our understanding of ourselves and others. As we turn the pages, we escape into the stories and characters, and return to our own lives with a newfound sense of purpose and connection.</p>

 <img src="book1.png" height="500px" width="100%px">
 <p>Buying books can be a thrill, whether you're browsing through a crowded bookstore or browsing online for a new title. And with the rise of resellers and online marketplaces, there's never been easier to get your hands on your favorite books. From rare collectibles to affordable bestsellers, there's something for everyone. And with the convenience of e-books, you can even download your favorite titles right to your device.</p>

 <img src="book2.png" height="500px" width="100%px">

 <p>There's something special about finding a quiet spot to curl up with a good book. Whether it's a cozy coffee shop, a peaceful library, or even a secluded park, there's something about being surrounded by nature and the sound of pages turning that just makes reading feel more enjoyable. And with the world getting busier and more noisy, it's nice to have a place where you can escape and immerse yourself in a good story. So grab a cup of tea, find your favorite spot, and get lost in a great book.</p>
 
 <img src="book3.png" height="500px" width="100%px">

</div>


</body>

</html>