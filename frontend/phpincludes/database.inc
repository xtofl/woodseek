<?php

interface iArticle {
	function title();
	function topics();
	function audience();
	function type();
	function url();
	function description();
}

interface iDatabase {
	function articlesForTopics($topics);
	function articles($constraint);
}

class Article implements iArticle {
	public function __construct(
		$title,$topics,$audience,$type,$url,$description
	) {
		$this->title=$title;
		$this->topics=$topics;
		$this->audience=$audience;
		$this->type=$type;
		$this->url=$url;
		$this->description=$description;
	}
	function title() { return $this->title; }
	function topics() { return $this->topics; }
	function audience() { return $this->audience; }
	function type() { return $this->type; }
	function url() { return $this->url; }
	function description() { return $this->description; }
}

?>