<?php 
$ID = $_GET["id"];
$NAME = shell_exec("python3 " . $_SERVER["DOCUMENT_ROOT"] . "/common/getname.py $ID");

// TODO: check if NAME is empty; display error page.

if($ID == ""){
	http_response_code(404);
	include($_SERVER["DOCUMENT_ROOT"] . "/404.php");
	// TODO: More informative Error page...
} else {

?>
<!doctype html>
<html>
	<head>
<?php
		echo "<title>Zero Ball Pool. $NAME.</title>";
include($_SERVER["DOCUMENT_ROOT"] . "/common/head.php");
?>
	</head>
	<body>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/common/header.php"); ?>
	
	<h1 id="pool-title">
		<span id="pool-name">
			<?php echo $NAME;?>
		</span>
		<span id="pool-id">
			<?php echo $ID;?>
		</span>
	</h1>
	<hr>
	
	<p>Placeholder content ;)</p>
	
	</body>
<?php
}
?>
