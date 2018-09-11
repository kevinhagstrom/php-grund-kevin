<?php
//inkludera includes.php
require 'includes.php';

if(empty($user)){
	$user = 'guest';
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- skriv ut $pageTitle i <title> -->
<title><?php echo $pageTitle; ?></title>
</head>
<body>
<!-- skriv ut $pageTitle i <h1> -->
<h1><?php echo strtoupper($pageTitle); ?></h1>

<!-- skriver ut $användaren i <h3> -->
<h3>User: <?php echo $user; ?></h3>

<!-- skriv ut $text i <div id="content"> -->
<div id="content">
	<?php echo nl2br($text); ?>
</div>

<!-- skriv ut $datum i <div id="content"> -->
<p><small> Dagens datum: <?php echo $date; ?></small></p>
</body>
</html>




