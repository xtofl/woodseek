define(["knockout", "proxy"], 
		function(ko, proxy){
	return {
		create: function(){
			var ret = {
				topics: ko.observable(_topics)
			};
			var _topics = [];
			proxy.async("api/topics.php", function(topics){
				var kotopics = topics.map(function(t){
					return {text: ko.observable(t.text)};
				});
				ret.topics(topics);
			});

			return ret;
		}
		
	}
});