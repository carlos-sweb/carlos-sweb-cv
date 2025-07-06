<?php

// lighthouse https://cillesca.xyz/ --view --output html --output-path ./report.html

include_once 'vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;
function createIndex( $file_name , $html ){
	$output =  minifer( $html );
	$htmloutput = fopen(__DIR__."/public/blog/".$file_name.".html", "wb");
	fwrite($htmloutput,$output);
	fclose($htmloutput);
}
function loadYaml(){
	
			$links = [
				"/fonts/400.css",
				"/css/normalize.min.css",
				"/css/blog.css",
				"/css/sql.css",
			];		
	$countries     = Yaml::parseFile('yml/blog/countries/countries.yml');	
	return [
		"countries" => $countries,	
		"links"=>$links
	];
}
	function minifer($code){
        return preg_replace(
          array(
              '/ {2,}/',
              '/<!--.*?-->|\t|(?:\r?\n[ \t]*)+/s'
          ),
          array(
              ' ',
              ''
          ),
          $code
        );
  	}
	$templateDir = __DIR__."/templates";
	$loader = new \Twig\Loader\FilesystemLoader($templateDir);
	$twig = new \Twig\Environment($loader, [
		'debug' => true,
		'cache' => __DIR__.'/templates/compilation_cache',
	]);
	createIndex(
		'countries',
		$twig->render('blog-countries.html.twig',loadYaml())
	);


 ?>