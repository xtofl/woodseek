<?php
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Woudzoeker</title>
		<meta name="description" content="" />
		<meta name="author" content="xtofl_2" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link rel="stylesheet" href="css/default.css"/>
		<script src="js/vendor/require/2.1.9/require.js"></script>
		<script>
			require.config({
				baseUrl : "js",
				paths : {
					"jquery" : "vendor/jquery/2.0.3/jquery"
				}
			});
		</script>
		<script>
			require(["jquery", "topics"], function($, topics) {
				$(topics.appendToElement($("nav .topics"), $("#search input.topics")));
			});
			require(["jquery", "search_feedback"], function($, feedback) {
				$(function(){
					feedback.bind({
					typeInput: $("#search input.topics")
					}, feedback.populateList($("#feedback > ol")))
				});
				
			});
		</script>
	</head>

	<body>

		<nav>
		<ul class="topics">
			</ul>
		</nav>

		<div>
			<div id="search">
				<ul>
					<li>
						Onderwerp:
						<input type="search" class="topics">
					</li>
					<li>
						Titel:
						<input type="search" name="titel">
					</li>
					<li>
						Doelpubliek:
						<input type="search" name="doelpubliek">
					</li>
				</ul>
			</div>
		</div>
		
		<div id="feedback">
			<ol id="entries">
				<li>First Found Entry</li>
				<li>Second Found Entry</li>
			</ol>
		</div>

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
