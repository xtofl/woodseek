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
		
		<link rel='stylesheet' href='css/default.css'/>
		<link rel='stylesheet' href='css/topics.css'/>
		
		<script src="js/vendor/require/2.1.9/require.js"></script>
		<script>
			require.config({
				baseUrl : "js",
				paths : {
					"jquery" : "vendor/jquery/2.0.3/jquery",
					"touchswipe" :"vendor/touchswipe/jquery.touchSwipe.min.js"
				}
			});
		</script>
		<script>
			require(["jquery", "topics", "search_feedback", "sliding"], 
			function($, topics, feedback, sliding) {
				$(function() {
					var wizardElement = $("#wizard");
					topics.appendToElement($("nav .topics"), $("#search input.topics"),
						function(element){
							sliding.slideOnClick(element, wizardElement);
						}
					);
					feedback.bind({
						typeInput : $("#search input.topics")
					}, feedback.populateList($("#feedback > ol")));
				});

			});
		</script>
	</head>

	<body>

		<div class="wizard_container">
			<div id="wizard" class="wizard">

				<nav class="step">
					<ul class="topics"></ul>
				</nav>

				<div class="step">
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
			</div>
		</div>
		<div id="feedback">
			<ol id="entries">
				<li>
					First Found Entry
				</li>
				<li>
					Second Found Entry
				</li>
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
