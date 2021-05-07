<?php
include_once 'vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;
function createIndex( $file_name , $html ){
	$output =  minifer( $html );
	$htmloutput = fopen(__DIR__."/public/".$file_name.".html", "wb");
	fwrite($htmloutput,$output);
	fclose($htmloutput);
}
function loadYaml( $lang ){
	$links       = Yaml::parseFile('yaml/'.$lang.'/links.yaml');
	$profile     = Yaml::parseFile('yaml/'.$lang.'/profile.yaml');
	$skills      = Yaml::parseFile('yaml/'.$lang.'/skills.yaml');
	$employments = Yaml::parseFile('yaml/'.$lang.'/employments.yaml');
	$education   = Yaml::parseFile('yaml/'.$lang.'/education.yaml');
	$titles      = Yaml::parseFile('yaml/'.$lang.'/titles.yaml');
	return [
		"links" => $links,
		"profile" => $profile,
		"skills" => $skills,
		"employments" => $employments,
		"education" => $education,
		"titles" => $titles,
		"lang" => $lang
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
	createIndex('index',$twig->render('home.html.twig', loadYaml('es')));
	createIndex('en',$twig->render('home.html.twig', loadYaml('en')));
 ?>
