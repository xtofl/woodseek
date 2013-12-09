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
			element.innerText = topic.text;
			element.setAttribute('data-name', topic.id);
			return element;
		};
		var elements = { 
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
			appendToElement: function(e, updateSearchElement) {
				elements.forEach(function(element){
					var topicElement = createElementForTopic(element);
					$(topicElement).click(function(){
						$(updateSearchElement).val(element.id);
					});
					$(e).append(topicElement);
				});
			}
	};});
