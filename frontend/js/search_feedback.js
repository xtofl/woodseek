define(["jquery"],
	function($)
	{
		var find = function(type, then) {
			var results = ["result 1", "result2"];
			then(results);
		};
	return {
		bind: function(inputs, output){
			$(inputs.typeInput).change(function(){				find(inputs.typeInput.val(), function(results){
					output.text(results);
				});
			});
		}
	}
});
