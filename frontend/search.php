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

<link rel='stylesheet' href='css/default.css' />
<link rel='stylesheet' href='css/topics.css' />

		<?php include_once("phpincludes/scripts.inc");?>
		<script>
			require(["jquery", "knockout", "knockoutmodel"], function($, ko, komodel){
				$(function(){
					var model = komodel.create();
					ko.applyBindings(model);
				});
			});
		</script>
</head>

<body>

	<div class="wizard_container">
		<div id="wizard" class="wizard">

			<nav class="step">
				<ul data-bind="foreach: topics">
					<li class="topic">
						<button
							data-bind="
								text: text, 
								click: $parent.currentTopic($data),
								css: 'topic '+className(),
								style: {
									backgroundPosition: 'bottom',
									backgroundImage: icon,
									backgroundRepeat: 'no-repeat'
								}
							">
						</button>
					</li>
				</ul>
			</nav>

			<div class="step">
				<div id="search">
					<ul>
						<li>Onderwerp: <input type="search" class="topics" data-bind="value: currentTopic()?currentTopic().id:''">
						</li>
						<li>Titel: <input type="search" name="titel">
						</li>
						<li>Doelpubliek: <input type="search" name="doelpubliek">
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="feedback">
		<ol id="entries" data-bind="foreach: results">
			<li>
				<a data-bind="attr: {href: url}"><span data-bind="text: title"></span></a>
				(voor <span data-bind="text: audience"></span>)
				:
				<span data-bind="text: description"></span>
			</li>
		</ol>
	</div>

	<footer>
		<p>
			<a href="/contact">Contact</a>
		</p>
		<p>&copy; Copyleft by xtofl</p>
	</footer>
</body>
</html>
