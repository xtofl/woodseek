<?php

require_once "../phpincludes/database.inc";


class MockDB implements iDatabase {
		

	function articlesForTopics($topics)
	{
		$lerenleren = array(
			new Article("lerelere1", "lerenleren", "student", "werkblaadje", "http://here.and.there", "een stapgsewijze dit en dat voor de student"),
			new Article("lerelere2", "lerenleren", "gonbegeleider", "url", "http://hereto.and.therefrom", "praktische tips om de student dit en dat en zus en zo"));
		$stressmanagement = array
		( new Article("stress is power", "stressmanagement", "student", "werkblaadje", "http://here.and.there", "een stapgsewijze dit en dat voor de student")
		, new Article("burndown bij scholieren", "stressmanagement", "gonbegeleider", "url", "http://hereto.and.therefrom", "praktische tips om de student dit en dat en zus en zo")
		, new Article("whoe pie vakantie", "stressmanagement", "student", "url", "http://hereto.and.therefromtoo", "wat als school moet en vakantie mag?")
		);

		$results = array();

		if(in_array("lerenleren", $topics )) {
			$results=array_merge($results, $lerenleren);
		};
		if(in_array("stressmanagement", $topics )) {
			$results=array_merge($results, $stressmanagement);
		};
		return $results;
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