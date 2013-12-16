/**
 * @author xtofl_2
 */

define( 
	["jquery"], 
	function($)
	{
		var createElementForTopic = function(topic, index) {
			var element = document.createElement("li");
			element.className = "topic "+("n"+(index+1));
			element.innerHTML = topic.text;
			element.setAttribute('data-name', topic.id);
			return element;
		};
		var topics = { 
			forEach: function(f){
				$.getJSON("api/topics.php", function(data, textStatus, jqXHR){
					data.forEach(f);
				});
			}
		};
		
		return {
			elements: function(){
				return elements;
			},
			appendToElement: function(containingElement, updateSearchElement, andThenWithElement) {
				topics.forEach(function(topic, index){
					var topicElement = createElementForTopic(topic, index);
					$(topicElement).click(function(){
						$(updateSearchElement).val(topic.id).change();
					});
					$(containingElement).append(topicElement);
					andThenWithElement(topicElement);
				});
			}
	};});
