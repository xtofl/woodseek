// implementation of api.idl in javascript.
//
define([], function(){
	var state = {};
	return {
		topics: function() {
			return state.topics;
		}
	};
});