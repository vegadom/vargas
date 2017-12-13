<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body  background="img/img6.jpg">

<div class="header">
	<h2>veterinaria vegas</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>bienvenido <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="login.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>


<h1>estamos  a tus ordenes </h1>
<p>estamos  asus  ordenes  en esta seccion dejaremos numeros  a  donde  te podras  comunicarte a cualquier hora y te orientaremos en lo que necesites
<br>
veterinaria:78-90-78-90
<br>
medicina interna: 67-45-34-12
<br>
urgencias canina:56-90-34-67
<br>
atencion y orientacion: 67-34-11-23
<br>
director general de dependencia:78-90-45-90 
 </p>
 <h2>redes sociales</h2>
<br>
email: caninos@hotmail.com
<br>
facebook: caninos_vega
<br>
youtube: caninos felices 
   
<script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
<div id="SkypeButton_Call_cesar_1">
 <script type="text/javascript">
 Skype.ui({
 "name": "dropdown",
 "element": "SkypeButton_Call_cesar_1",
 "participants": ["cesar"]
 });
 </script>
</div>

		
</body>
</html>