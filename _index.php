<?php 

	ini_set('display_errors', 1);

	ini_set('display_startup_errors', 1);

	error_reporting(E_ALL);

 	include_once 'vendor/autoload.php';

 	use Symfony\Component\Yaml\Yaml;
 	use Symfony\Component\Yaml\Exception\ParseException;

 	$skills = null;

	try{

	    $skills = $value = Yaml::parseFile('yaml/skills.yaml');

	}catch( ParseException $exception ){

	    printf('Unable to parse the YAML string: %s', $exception->getMessage());
	}
 

 
 $title = 'Carlos Illesca - Developer';	
 
 $links = [
	'node_modules/normalize.css/normalize.css',
	'node_modules/animate.css/animate.min.css',
	'node_modules/flexboxgrid/dist/flexboxgrid.min.css',
	'node_modules/spectre.css/dist/spectre.min.css',
	'node_modules/spectre.css/dist/spectre-exp.min.css',
	'node_modules/spectre.css/dist/spectre-icons.min.css',
	'node_modules/@material/elevation/dist/mdc.elevation.min.css',
	'node_modules/typeface-ubuntu/index.css',
	'css/css-utility/css-dist/cp-color.min.css',
	'css/css-utility/css-dist/text-align.min.css',
	'node_modules/material-icons-font/material-icons-font.css',
	'css/style-cv.css'
 ];

 $presentation = '';

 $contact = [
 	'phone'=>'+56 9 6457 3739',
 	'email'=>'c4rl0sill3sc4@gmail.com'
 ];

$jsonFile = 'json/skills.json'; 


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/png" href="favicon.png" />
	<meta charset="UTF-8">
<?php foreach( $links as $href ): ?>
	<link rel="stylesheet" href="<?=$href?>">
<?php endforeach; ?>
	<title><?=$title?></title>
</head>
<body class="container" >

	<div class="row" style="height:100% !important;min-height:100%;" >
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 center-xs mdc-elevation--z2 animated fadeIn bluegray600"  >
			a
		</div>
	</div>
	
</body>
</html>