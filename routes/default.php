<?php

	$this->get('', function($arg){
		echo 'home';
	});

	$this->loadRouteFile('noticias');
	$this->loadRouteFile('404');
 ?>