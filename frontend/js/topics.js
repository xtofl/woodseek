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
			element.setAttribute('data-name', topic);
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
			appendToElement: function(e, updateSearchElement) {
				elements.forEach(function(element){
					var topicElement = createElementForTopic(element);
					$(topicElement).click(function(){
						$(updateSearchElement).val(element);
					});
					$(e).append(topicElement);
				});
			}
	};});
