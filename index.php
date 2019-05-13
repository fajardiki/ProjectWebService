<?php

require "vendor/autoload.php";

$app = new Slim\Slim(array(
		"view" => new \Slim\Extras
));

$app->get("/",function(){
	echo "Hello Daniy";


});

$app->run();

?>