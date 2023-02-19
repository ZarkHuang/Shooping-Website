<?php $num = "幹的好兄弟"?>
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <nav class="home-nav">
     	<a href="change-password.php">Change Password</a>
        <a href="logout.php">Logout</a>
     </nav>

	<script>

        setTimeout("window.location.href='../index.php'",1000);
	</script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>