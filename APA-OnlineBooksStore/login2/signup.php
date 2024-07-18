

<?php

session_start();

 $db= mysqli_connect("localhost","root","","www_project");
  

function adminLogin($IndexNo,$user_pwd,$db)
{
  $sql="SELECT IndexNo,user_pwd FROM register WHERE IndexNo='$IndexNo' AND user_pwd='$user_pwd'";
  $ma=$db->query($sql);
  if($ma)
  {
    if($ma->num_rows==1)
    {
      $_SESSION["IndexNo"] = $IndexNo;
     // $_SESSION['usertype']='admin';
      header("location:result.php");
    }
    else return false;
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Keep in touch</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
===============================================================================================
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
===============================================================================================
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
===============================================================================================
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
===============================================================================================	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
===============================================================================================
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body class="sa">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="" method="POST" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
 					

 			
					<span class="login100-form-title">
						Sign In
					</span>


					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter IndexNo">
						<input class="input100" type="text" name="IndexNo" placeholder="Book Title">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter user_pwd">
						<input class="input100" type="password" name="user_pwd" placeholder="user_pwd">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							<!--Forgot-->
						</span>

						<a href="#" class="txt2">
							<!--IndexNo / user_pwd?-->
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Sign in
						</button>
					</div>
</form>
					<?php
                                if(isset($_POST["submit"]))
{
  $IndexNo=$_POST["IndexNo"];
  $user_pwd=$_POST["user_pwd"];

  adminLogin($IndexNo,$user_pwd,$db);
 
  echo "<font color=red><center> Book_title or user_pwdword is Incorrect</center></font>";
}  
                                ?>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="login.php" class="txt3">
							Sign up now
						</a>
					</div>
				
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
		

</body>
</html>