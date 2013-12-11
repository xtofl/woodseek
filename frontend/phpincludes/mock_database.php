<?php

require_once "../phpincludes/database.inc";


class MockDB implements iDatabase {
		

	function articlesForTopics($topics)
	{
		$lerenleren = array(
			new Article("lerelere1", "leren-leren", "student", "werkblaadje", "http://here.and.there", "een stapgsewijze dit en dat voor de student"),
			new Article("lerelere2", "leren-leren", "gonbegeleider", "url", "http://hereto.and.therefrom", "praktische tips om de student dit en dat en zus en zo"));
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