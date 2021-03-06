<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>index</title>
		<meta name="description" content="" />
		<meta name="author" content="xtofl_2" />
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link rel="stylesheet" href="css/default.css"/>
		<script src="js/vendor/require/2.1.9/require.js">			
		</script>
		<script>
		  require.config({
		    baseUrl: "js",
		    paths: {
		        "jquery": "vendor/jquery/2.0.3/jquery"
		    }
		  });
		</script>
		<script>
			require(["jquery", "topics"], function($, topics){
				$(topics.appendToElement($("nav .topics")));
			});
		</script>
	</head>

	<body>
			<header>
				<h1>Woudzoeker</h1>
			</header>
			<nav>
				<ul id="site-nav">
					<li><a href="/">Home</a>
					</li>
				</ul>
				<ul class="topics">					
					<li><a href="/">Home</a>
					</li>
				</ul>
			</nav>

			<footer>
				<p>
					<a href="/contact">Contact</a>
				</p>
				<p>
					&copy; Copyleft  by xtofl
				</p>
			</footer>
	</body>
</html>
