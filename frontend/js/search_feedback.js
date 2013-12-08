define(["jquery"],
	function($)
	{
		var urlFor = function(query) {
			var base = "api/find.php";
			var topics = "topics="+query.topics;
			var url = base + "?" + topics;
			return url;
		};
		var find = function(type, then) {
			var url = urlFor({topics: type});
			console.log("restarting query to "+url);
			$.getJSON(url, 
				null, 
				function(data, textStatus, jqXHR){
					then(data);
				});
		};
	return {
		bind: function(inputs, output){
			var onResult = function(results){
					output.text(results);
			};
			$(inputs.typeInput).on('keyup', function(){
				find(inputs.typeInput.val(), onResult); 
			});
		}
	}
});
