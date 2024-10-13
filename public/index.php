<?php
include_once './../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;


function loadYaml( $lang ){

	$profile     = Yaml::parseFile('../yml/profile.yml');
	$skills      = Yaml::parseFile('../yml/skills.yml');
	$links       = Yaml::parseFile('../yml/links.yml');	
	
	$employments = Yaml::parseFile('../yml/'.$lang.'/employments.yml');
	$education   = Yaml::parseFile('../yml/'.$lang.'/education.yml');
	$titles      = Yaml::parseFile('../yml/'.$lang.'/titles.yml');
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
	$templateDir = __DIR__."/../templates";	
	$loader = new \Twig\Loader\FilesystemLoader($templateDir);
	$twig = new \Twig\Environment($loader, [
		'debug' => true,
		'cache' => __DIR__.'/../templates/compilation_cache',
	]);

	$lang = isset($_GET['lang']) ? ( in_array($_GET['lang'],["es","en"]) ? $_GET['lang'] : "es" ):"es";
		


	echo $twig->render('home.html.twig', loadYaml($lang));

	// createIndex('index',$twig->render('home.html.twig', loadYaml($lang)));
	// createIndex('en',$twig->render('home.html.twig', loadYaml('en')));
 ?>