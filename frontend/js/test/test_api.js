require(
	["api"
	], 
	function(api
	){
		
	test("Initial Values", function(){
		deepEqual(api.topics(), [], "no topics should be present.");
		deepEqual(api.audiences(), [], "no audiences should be known.");
		deepEqual(api.shapes(), [], "no shapes should be known.");
	});
	
	test("After Connection", function() {
		var mock = {
				asyncTopics: function(f) {
					mock.asyncTopics.call = { f: f };
				}
		};
		api.connect(mock);
		
		ok(mock.asyncTopics.call, "asyncTopics was called");
		
		mock.asyncTopics.call.f([1,2,3]);
		deepEqual(api.topics(), [1,2,3], "When backend returns topics, they should be remembered");
	});
});