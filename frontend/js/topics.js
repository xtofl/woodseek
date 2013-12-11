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
			appendToElement: function(containingElement, updateSearchElement) {
				topics.forEach(function(topic){
					var topicElement = createElementForTopic(topic);
					$(topicElement).click(function(){
						$(updateSearchElement).val(topic.id).change();
					});
					$(containingElement).append(topicElement);
				});
			}
	};});
