<?php 
	require_once("../includes/conn.php");
	if(isset($_GET['email']))
	{
		$email = $_GET['email'];
		$pass = $_GET['password'];
		$q = "select id,email,password from users where email='{$email}' and password='{$pass}'";
		$r = mysqli_query($con,$q);
		$c = mysqli_num_rows($r);
		if($c>0)
		{
			$row = mysqli_fetch_assoc($r);
            $_SESSION['uid'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            echo 1;
		}else{
			echo 0;
		}
	}
 ?>