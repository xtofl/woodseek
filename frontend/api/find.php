<?php

require_once "../phpincludes/mock_database.php";

$query = $_GET["topics"] or "all";

$topics = split(",", $query);

function json($results) {
	return "[".join(", \n",$results)."]";
}


function findTopics($topics) {
	$db = articles();
	$result = $db->articlesForTopics($topics);
	return $result;
}

print(json_encode(findTopics($topics)));

?>