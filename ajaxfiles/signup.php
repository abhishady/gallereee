<?php
require_once('../includes/conn.php');
if(isset($_GET['fname']))
	{
		$fname = ($_GET['fname']);
		$lname = ($_GET['lname']);
		$email = ($_GET['email']);
		$pass = ($_GET['password']);
		$contact= ($_GET['contact']);

			$q="insert into users(fname,lname,email,password,contact) values ('{$fname}','{$lname}','{$email}','{$pass}','{$contact}')";
			$r=mysqli_query($con,$q);
			if($r)
			{
				echo 1;
			}else{
                echo 0;
			}
	}
 ?>