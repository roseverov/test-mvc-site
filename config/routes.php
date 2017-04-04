<?php

	return array(
		//'news/([0-9]+)' => 'news/view',//actionView в NewsController
		
		'news/([0-9]+)' => 'news/view/$1',//actionView в NewsController
		
		'news' => 'news/index',//actionIndex в NewsController
		
		//'product' => 'product/list'//actionList в ProductController
	);
	
?>