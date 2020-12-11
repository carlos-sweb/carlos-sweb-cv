<?php 
	/*
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);*/
	include_once 'vendor/autoload.php';
	use Symfony\Component\Yaml\Yaml;	
	use Symfony\Component\Yaml\Exception\ParseException;	
	use Wa72\HtmlPrettymin\PrettyMin;

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

	$pm = new PrettyMin();

	$output = $pm->load($html)->minify()->saveHtml();


	$htmloutput = fopen(__DIR__."/public/index.html", "wb");
	fwrite($htmloutput,$output);
	fclose($htmloutput);



 ?>
