define(["jquery"],
function($){

	return function(clickelementsToSlide, wizard){
		var e = $(clickelementsToSlide);
		e.on('click', function(){
			$(wizard).css("transform", "translateX(" + -450 + "px)");
		});	
	};
});
