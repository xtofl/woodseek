<?php

require_once "../phpincludes/database.inc";


class MockDB implements iDatabase {
		

	function articlesForTopics($topics)
	{
		$lerenleren = array("lerenleren1", "lerenleren2");
		$stressmanagement = array("stressmgmt1", "stressmgmt2");
		
		if($topics == array("lerenleren")) {
			return $lerenleren;		
		}
	}
	public function articles($constraint) {
		return null;
	}
}

function articles()
{
	return new MockDB();	
}


?>