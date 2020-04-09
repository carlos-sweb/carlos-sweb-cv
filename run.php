<?php 

	ini_set('display_errors', 1);

	ini_set('display_startup_errors', 1);

	error_reporting(E_ALL);

	include_once 'vendor/autoload.php';

	use Symfony\Component\Yaml\Yaml;
	
	use Symfony\Component\Yaml\Exception\ParseException;

	exec("minify -o ./public/index.html index.html");

	$links = Yaml::parseFile('yaml/links.yaml');

	foreach ($links as $key => $link) {
		
		$_link = explode("/",$link);

		$_dirbase = '';

		for( $i = 0; $i < (count($_link)-1);$i++ ){

			$_dirbase.=$_link[$i]."/";

		};

		$output = "mkdir -p  ./public/".$_dirbase." &&  cp -r ".$link." ./public/".$link;

		exec( $output );

	}

	exec("cp -r favicon.png ./public/");

	


 ?>