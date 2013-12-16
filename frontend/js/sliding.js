define(["jquery", "touchswipe"], function($, touchswipe) {

	return {
		slideOnClick : function(clickelementsToSlide, wizard) {
			var e = $(clickelementsToSlide);
			e.on('click', function() {
				$(wizard).css("transform", "translateX(" + -300 + "px)");
			});
		},
		makeSwipable : function(element) {
			$(element).swipe({
				swipe : function(event, direction, distance, duration, fingerCount) {
					switch(direction) {
						case 'left':
							$(element).css("transform", "translateX(" + -distance + "px)");
						break;
						case 'right':
							$(element).css("transform", "translateX(" + distance + "px)");
						break;
					}
				
				}
			});
		}
	};
});
