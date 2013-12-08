<?php

require_once "../phpincludes/mock_database.php";

$query = $_GET["keys"] or "all";

$keys = split(",", $query);

function json($results) {
	return "[".join(", \n",$results)."]";
}


function find($keys) {
	$db = articles();
	$result = $db->articlesForTopics($keys);
	return $result;
}

print(json_encode(find($keys)));

?>