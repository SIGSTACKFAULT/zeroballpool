<!doctype html>
<?php 
$ID = $_GET["id"];
$NAME = shell_exec("python3 " . $_SERVER["DOCUMENT_ROOT"] . "/common/getname.py $ID");

// check if NAME is empty; display error page.
?>
<html>
	<head>
		<title>Zero ball pool. | #<?php echo $ID;?></title>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/common/head.php"); ?>
	</head>
	<body>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/common/header.php"); ?>
	
	<h1>Pool: <span id="pool-name"><?php echo $NAME;?></span><span id="pool-id"><?php echo $ID;?></span></h1>
	<hr>
	
	</body>
