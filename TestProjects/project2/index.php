<?php 

if(isset($_GET["userLogged"])){
	session_start();
	$_SESSION["user"] = json_decode($_GET["userLogged"]);
}else{
	session_destroy();
}

if(isset($_GET["loggedOut"]) && $_GET["loggedOut"] == 1){
	session_destroy();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php if(!$_SESSION["user"]){?>
	<a href="http://sso.app:8000/login?callBack=http://localhost:8888/project2/index.php">Login</a>
<?php }else{?>
	<label>User: <?php echo $_SESSION["user"]->name; ?></label>
	<form method="post" action="http://sso.app:8000/logout">
		<input type="hidden" name="callBack" value="http://localhost:8888/project2/index.php">
		<button type="submit">Logout</button>	
	</form>
	
<?php } ?>
</body>
</html>