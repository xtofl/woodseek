define(["knockout", "proxy"], 
		function(ko, proxy){
	return {
		create: function(){
			var ret = {
				topics: ko.observable([]),
				currentTopic: ko.observable(),
				results: ko.observable([])
			};

			var initialize = function() {
				proxy.async("api/topics.php", function(topics){
					var kotopics = topics.map(function(t, index){
						var kotopic = Object.create(t, {
							});
						kotopic.className = ko.computed(function(){
							return "n"+(1+index);
						}, kotopic);
						kotopic.icon = "url("+t.icon+")";
						return kotopic;
					});
					ret.topics(kotopics);
				});
			};
			
			ret.currentTopic.subscribe(function(topic){
				if (topic && topic.id) {
					proxy.async("api/find.php?topics="+topic.id, function(results){
						ret.results(results);
					});
				}
			});
			
			initialize();

			return ret;
		}
		
	};
});