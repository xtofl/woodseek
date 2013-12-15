define(["jquery"],
function($){

	return function(clickelementsToSlide){
		clickelementsToSlide.on('click', function(){alert();});	
		return;
		$('#slide1_controls').on('click', 'span', function() {
			$("#slide1_images").css("transform", "translateX(" + $(this).index() * -450 + "px)");
			$("#slide1_controls span").removeClass("selected");
			$(this).addClass("selected");
		}); 

	};
});
