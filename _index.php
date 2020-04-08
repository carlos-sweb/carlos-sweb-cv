<?php 
 
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

 $json_skills =  file_get_contents('json/skills.json');

 print_r(  json_encode($json_skills)  );

$skills = [];

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
<body>


	<ul>
			<?php foreach($skills as $skill): ?>
				<span><?=$skill?></span>
			<?php endforeach; ?>
	</ul>
	
</body>
</html>