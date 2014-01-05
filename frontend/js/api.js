// implementation of api.idl in javascript.
//
define([], function(){
	var state = {
			topics: [],
			audiences: [],
			shapes: []
	};
	return {
		connect: function(proxy) {
			proxy.async("api/topics.php", function(topics){ state.topics = topics; });
		},
		topics: function() {
			return state.topics;
		},
		audiences: function() {
			return state.audiences;
		},
		shapes: function() {
			return state.shapes;
		},
		query: {
			attribute_contains: function(attribute, part){
				return { 
					type: "AttributeContains(Attribute, AttributePart)",
					attribute: attribute,
					part: part
					};
			}
		}
	};
});