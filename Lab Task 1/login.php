<?php
     $uname="";
	 $pass="";
	 if($_SERVER["REQUEST_METHOD"]=="POST") {
		  $uname=$_POST["uname"];
		  $pass=$_POST["pass"];
		  if($uname == "safaet" && $pass == "123456"){
			  
			  setcookie("user",$uname,time()+60,'/');
			  header("Location:dashboard.php");
		  }
	 }
	 ?>

<html>

     <head></head>
	 <body>
	     <form method="post">
		          <input type="text" name="uname" placeholder="username"><br>
				  <input type="password" name="pass" placeholder="password"><br>
				  <input type="submit" value="login">
			</form>
			</body>
</html>