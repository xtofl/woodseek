define(["jquery"],
	function($)
	{
		var find = function(type, then) {
			var results = ["result 1", "result2"];
			then(results);
		};
	return {
		bind: function(inputs, output){
			var onResult =	function(results){
					output.text(results);
			};
			$(inputs.typeInput).on('keydown', function(){				find(inputs.typeInput.val(), onResult); 
			});
		}
	}
});
