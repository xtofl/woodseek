<?php

require_once "../phpincludes/database.inc";

$topics = array(
		array("text"=>"stress-management", "id"=>"stress-management"),
		array("text"=>"leerstrategie", "id"=>"lerenleren"),
		array("text"=>"zelfbeeld", "id"=>"zelfbeeld"),
		array("text"=>"socio-emotionele ontwikkeling", "id"=>"socio-emo"),
		array("text"=>"organisatie", "id"=>"organisatie"),
		array("text"=>"adminstratie", "id"=>"administratie"),
		array("text"=>"begeleidingsstrategie", "id"=>"begeleiding")
);

echo json_encode($topics);

?>