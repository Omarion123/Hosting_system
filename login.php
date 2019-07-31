<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<head>
    <!--
    /   Multipurpose: Free Template by FreeHTML5.co
    /   Author: https://freehtml5.co
    /   Facebook: https://facebook.com/fh5co
    /   Twitter: https://twitter.com/fh5co
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Multipurpose</title>
    <!-- Stylesheets & Fonts -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700"
        rel="stylesheet">
    <!-- Plugins Stylesheets -->
    <link rel="stylesheet" href="assets/css/loader/loaders.css">
    <link rel="stylesheet" href="assets/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/aos/aos.css">
    <link rel="stylesheet" href="assets/css/swiper/swiper.css">
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Army shop login</div>
      <div class="card-body">
        <?php
        include'connection.php';
        error_reporting(0);
        $user=$_POST['name'];
        $pass=$_POST['password'];
        $sql="select * from user where name='$user' AND password='$pass'";
        $res=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($res);
        $Id=$row['id'];
        $username=$row['name'];
        $pass=$row['password'];
        $category=$row['user_type'];
        if($category=='admin')
	{
		session_start();
	$_SESSION['success'] = 'OK';
	$_SESSION['name'] = $username;
	$_SESSION['category'] = $category;
	echo '<script type="text/javascript">window.location=\'admin_home.php\';</script>';
	}
	else if($username!=$user && $pass!=$pass)
    {
	?>
	<p style="color:#dd0000; display:inline-block; width:100%; text-align:center;">Incorrect username or password.</p>
	<?php
	}
else{
	?>
	<p style="color:#dd0000; display:inline-block; width:100%; text-align:center;">Enter username and password.</p>
	<?php
	}
?>	
        <form method="POST" action="login.php">
			<form class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Enter Name" style="background-color:black">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Enter password" style="background-color:black">
    </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
  </form>
      </div>
    </div>
  </div>
<!-- Footer Endt -->
    <!--jQuery-->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <!--Plugins-->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/loaders.css.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/lightgallery-all.min.js"></script>
    <!--Template Script-->
    <script src="assets/js/main.js"></script>

</html>
