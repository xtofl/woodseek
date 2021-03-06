define(["jquery", "touchswipe"], function($, touchswipe) {

	return {
		slideOnClick : function(clickelementsToSlide, wizard) {
			var e = $(clickelementsToSlide);
			e.on('click', function() {
				$(wizard).css("transform", "translateX(" + -300 + "px)");
			});
		},
		makeSwipable : function(element) {
			var slideRight = function(pixelsToTheRight) {
				$(element).css("transform", "translateX(" + pixelsToTheRight + "px)");		
			};
			$(element).swipe({
				swipe : function(event, direction, distance, duration, fingerCount) {
					switch(direction) {
						case 'left':
							slideRight(-distance);
						break;
						case 'right':
							slideRight(distance);
						break;
					}
				
				}
			});
		}
	};
});
