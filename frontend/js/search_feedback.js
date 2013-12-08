define(["jquery"],
	function($)
	{
		var urlFor = function(query) {
			var base = "api/find.php";
			var topics = "topics="+query.topics;
			var url = base + "?" + topics;
			return url;
		};
		var find = function(type, resultFunction) {
			var url = urlFor({topics: type});
			console.log("restarting query to "+url);
			$.getJSON(
				url, 
				null, 
				function(data, textStatus, jqXHR){
					if (data)
						resultFunction(data);
				});
		};
	return {
		bind: function(inputs, output){
			var onResult = function(results){
					output(results);
			};
			var startSearch = function(){
				find(inputs.typeInput.val(), onResult); 
			};
			$(inputs.typeInput).on('keyup', startSearch);
			$(inputs.typeInput).on('change', startSearch);
		},
		
		populateList: function(element) {
			return function(results) {
				var listnode = $(element);
				listnode.empty();
				results.forEach(function(result){
					var li = document.createElement("li");
					li.innerText = result;
					listnode.append(li);
				});
			};
		}
	}
});
