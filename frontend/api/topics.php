<?php

require_once "../phpincludes/database.inc";

$topics = array(
		array("text"=>"stress-management", 
			"id"=>"stressmanagement", 
			"icon"=>"http://openiconlibrary.sourceforge.net/gallery2/open_icon_library-full/icons/png/48x48/emotes/face-worried.png"),
			
		array("text"=>"leerstrategie", 
			"id"=>"lerenleren",
			"icon"=>"http://openiconlibrary.sourceforge.net/gallery2/open_icon_library-full/icons/png/48x48/actions/address-book-new-2.png"),
			
		array("text"=>"zelfbeeld", 
			"id"=>"zelfbeeld",
			"icon"=>"http://openiconlibrary.sourceforge.net/gallery2/open_icon_library-full/icons/png/48x48/devices/camera-photo-5.png"),
			
		array("text"=>"socio-emotionele ontwikkeling", 
			"id"=>"socio-emo",
			"icon"=>"http://openiconlibrary.sourceforge.net/gallery2/open_icon_library-full/icons/png/48x48/devices/camera-photo-5.png"),
			
		array("text"=>"organisatie", 
			"id"=>"organisatie",
			"icon"=>"http://openiconlibrary.sourceforge.net/gallery2/open_icon_library-full/icons/png/48x48/devices/camera-photo-5.png"),
			
		array("text"=>"adminstratie", 
			"id"=>"administratie",
			"icon"=>"http://openiconlibrary.sourceforge.net/gallery2/open_icon_library-full/icons/png/48x48/devices/camera-photo-5.png"),
			
		array("text"=>"begeleidingsstrategie", 
			"id"=>"begeleiding",
			"icon"=>"http://openiconlibrary.sourceforge.net/gallery2/open_icon_library-full/icons/png/48x48/devices/camera-photo-5.png")
);

echo json_encode($topics);

?>