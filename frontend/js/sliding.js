define(["jquery"],
function($){

	return {
		slideOnClick: function(clickelementsToSlide, wizard){
			var e = $(clickelementsToSlide);
			e.on('click', function(){
				$(wizard).css("transform", "translateX(" + -300 + "px)");
			});	
		},
		makeSwipable: function() {
			
		}
	};
});
