/**
 * @author xtofl_2
 */

define( 
	["jquery"], 
	function($)
	{
		var createElementForTopic = function(topic) {
			var element = document.createElement("li");
			element.className = "topic";
			element.innerText = topic;
			return element;
		};
		var elements = 
		["stress-management",
		"leerstrategie",
		"zelfbeeld",
		"socio-emotionele ontwikkeling",
		"organisatie",
		"adminstratie",
		"begeleidingsstrategie"];
		
		return {
			elements: function(){
				return elements;
			},
			appendToElement: function(e) {
				elements.forEach(function(element){
					$(e).append(createElementForTopic(element));
				});
			}
	};});
