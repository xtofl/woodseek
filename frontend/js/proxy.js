define([ "jquery" ], function($) {
	return {
		async : function(url, callback) {
			return $.ajax({
				datatype : "json",
				url : url,
				success : function(data, textStatus, jsXHR) {
					callback(data);
				},
				error : function(jqXHR, textStatus, errorThrown) {
					console.error("ajax request '" + url + "': " + textStatus);
				}
			});
		}
	};
});