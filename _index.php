<?php 

	ini_set('display_errors', 1);

	ini_set('display_startup_errors', 1);

	error_reporting(E_ALL);

 	include_once 'vendor/autoload.php';

 	use Symfony\Component\Yaml\Yaml;
 	use Symfony\Component\Yaml\Exception\ParseException;

 	
	$skills = Yaml::parseFile('yaml/skills.yaml');
	$title = 'Carlos Illesca - Developer';	
	$links = Yaml::parseFile('yaml/links.yaml');
	$presentation = '';

	 $contact = [
	 	'phone'=>'+56 9 6457 3739',
	 	'email'=>'c4rl0sill3sc4@gmail.com'
	 ];

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