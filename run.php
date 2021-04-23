<?php 
	/*ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);*/

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

	include_once 'vendor/autoload.php';

	use Symfony\Component\Yaml\Yaml;	
	
	use Symfony\Component\Yaml\Exception\ParseException;		

	$templateDir = __DIR__."/templates";

	$loader = new \Twig\Loader\FilesystemLoader($templateDir);

	$twig = new \Twig\Environment($loader, [	
		'debug' => true,
		'cache' => __DIR__.'/templates/compilation_cache',	
	]);

	$links       = Yaml::parseFile('yaml/links.yaml');

	$profile     = Yaml::parseFile('yaml/profile.yaml');

	$skills      = Yaml::parseFile('yaml/skills.yaml');

	$employments = Yaml::parseFile('yaml/employments.yaml');

	$education   = Yaml::parseFile('yaml/education.yaml');

	$html = $twig->render('home.html.twig', [ 
			'links' => $links,
			'profile' => $profile,
			'skills' => $skills,
			'employments' => $employments,
			'education' => $education
		]);

	

	$output =  minifer( $html ); //$pm->load( $html )->minify()->saveHtml();

	$htmloutput = fopen(__DIR__."/public/index.html", "wb");

	fwrite($htmloutput,$output);

	fclose($htmloutput);

 ?>