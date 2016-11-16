<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width">
<title>Inhuman [a webcomic] : updates WEEKLY</title>
<meta name="keywords" content="webcomics comics comic webcomic inhuman hekshanian nikitak soshika soshi lypha kyotoshi solla koji scifi sci fi sci-fi manga hekshano icarus">
<meta name="description" content="a sci-fi webcomic">

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/scroll.js"></script>

</head>
<body>

<div class="body">
	<header>
		<?php 
			//Ads and whatnot go here
		?>
	</header>
	<div class="content-wrapper">
		<nav class="clearfix">
			<a href="/" class="index-link"></a>
			<section class="tabs">
				<a href="#archives" class="link">archives</a>
				<a href="#about" class="link">about</a>
				<a href="#shop" class="link">shop</a>
				<a href="#extra" class="link">extra</a>
			</section>
		</nav>
		<section class="main">
			<aside class="left">
				<div class="last-update">
					<p>6/6/66</p>
				</div>
				<div class="recent-pages">
					<a href="comic630.php">630</a> . <a href="comic631.php">631</a> . <a href="comic632.php">632</a> . <span>633</span>
				</div>
				<div class="social-media">
					<a href="#tumblr" class="tumblr"></a>
					<a href="#twitter" class="twitter"></a>
					<a href="#facebook" class="facebook"></a>
				</div>
				<div class="fun-space">
				</div>
			</aside>
			<aside class="right">
				<a href="#patreon" class="patreon"></a>
				<section class="project-notes">
					<div class="worm-up">
					</div>
					<div class="worm-down">
					</div>
					<div class="notes-content">
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie vehicula faucibus. Quisque eu leo id elit sodales rhoncus sed id massa. Etiam ac sagittis nisi, a sollicitudin magna. Nullam tincidunt elementum enim, non imperdiet nisi pulvinar eu. Vivamus pellentesque turpis nec velit blandit feugiat. Donec non ex id elit ultricies feugiat vel eget quam. Etiam felis quam, varius non ex sed, ullamcorper venenatis erat. Mauris a felis eu velit hendrerit lacinia. Duis semper nulla et metus mattis convallis. Aliquam at massa bibendum, molestie diam sit amet, ultrices tellus. Sed vel convallis tortor, non bibendum mi. Maecenas vitae sapien mauris. Suspendisse potenti.
					</p>
					<p>
					Fusce eu ultricies purus, non mollis nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam auctor sapien non consectetur vestibulum. Suspendisse eget dolor et nibh aliquam tristique vel posuere nunc. Duis vestibulum ultrices luctus. Proin tincidunt felis justo. Sed rhoncus egestas elementum. Nam rutrum arcu scelerisque ante tincidunt, et malesuada nulla bibendum. Praesent vehicula gravida imperdiet. Mauris vitae sem eu dolor laoreet consequat. Integer dignissim elit vulputate, malesuada erat et, tincidunt massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc commodo lectus ac purus sollicitudin venenatis. Aliquam vel sollicitudin arcu. Suspendisse congue, felis nec congue tempus, ex est condimentum turpis, laoreet mollis nulla enim sit amet justo. Morbi imperdiet dui ut convallis egestas.
					</p>
					<p>
					Vestibulum vestibulum, metus eu ullamcorper finibus, ante ex pellentesque magna, in bibendum orci ligula nec tellus. Mauris vulputate ultrices nisi id tincidunt. Vestibulum non lacus ac ante tincidunt malesuada eleifend sit amet arcu. Suspendisse efficitur commodo commodo. Sed faucibus semper odio. Donec ac dictum augue, non efficitur quam. Nam vel enim iaculis, egestas augue non, sodales metus. Vestibulum nec lectus lectus. Phasellus lorem lectus, rhoncus in tincidunt ut, tempor sed orci. Ut odio nibh, feugiat vel feugiat id, porta fermentum mi. Suspendisse ultrices mi semper, blandit mi a, varius dolor. Donec consequat ut tellus in aliquet. In hac habitasse platea dictumst. Nulla in egestas metus.
					</p>
					</div>
				</section>
			</aside>
			<section class="center">
				<div class="high-res">
					<a href="#highres" class="high-res-link">Hi Res Page</a>
				</div>
				<nav class="top">
					<a href="#first" class="first"></a>
					<a href="#prev" class="prev"></a>
					<a class="latest index"></a>
					<a class="next index"></a>

				</nav>
				<div class="page">
					<img src="manga633.png" />
				</div>
				<nav class="bottom">
					<a href="#first" class="first"></a>
					<a href="#prev" class="prev"></a>
					<a class="latest index"></a>
					<a class="next index"></a>
				</nav>
			</section>
			
		</section>
		<footer>
			All writing, characters, webdesign and artwork are (c) H. Carlian 1997-2016 
			<br>Fan works are (c) their respective authors, creators and artists.
		</footer>
	</div>
</div>


<?php 

$xml = simplexml_load_file("http://not-fun.dreamwidth.org/data/rss") or die ("Error: NOTHING WORKS AAAA");
echo "<pre>" . print_r($xml, true) . "</pre>";

</body>