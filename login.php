<?php
include('connect.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood_Bank</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><a href="index.php"><img src="logo.jpg" width="80px" height="75" align="left" alt="logo"></a><h1>Blood Bank Management System</h1></div>
			<div id="body">
				<nav id="navbar">
					<a href="index.php">About Us</a>
					<a href="contactus.php">Contact Us</a>
					<a class="active" href="login.php">Login</a>
					<a href="signup.php">Sign Up</a>
                </nav><br>

<form action="" method="POST">
				<table  id="login" align="center">
					<tr>
						<td align="center"><img src="log.jpg" width="150px" height="150px"></td>
					</tr>
					<tr><td align="center"><input  type="text" name="user" placeholder="Email" required="required" style="width: 200px;"></td>
					</tr>
					<tr>
						<td align="center"><input type="Password" name="pass" placeholder="Password" required="required" style="width: 200px;"></td>
					</tr> 
					<tr id="spec">
						<td align="center">New User? • <a href="signup.php">Register</a></td>
					</tr>
					<tr>
						<td align="center"><input type="submit" name="login" value="Login" style="width: 210px;"></td>
					</tr>
				</table>
			</form>
<?php
			if(isset($_POST['login']))
			{
				$name;
				$user=$_POST['user'];
				$pass=$_POST['pass'];
				$q=$db->prepare("SELECT * FROM users WHERE email='$user' && pass='$pass'");
				$q->execute();
				$res=$q->fetchAll(PDO::FETCH_OBJ);
				if($res)
				{
					$_SESSION['user']=$user;
					header("Location:home.php");

				}
				else
				{
					echo "<script>alert('Wrong User')</script>";
				}
			}
			?>






			</div><br><br><br><br>
		    <footer id="footer"><strong>Contact Us-</strong>
		    	<p>Address: Unviersity of Allahabad, Prayagraj(U.P.)<br>
		    		Mobile No.<br>
		    	    Website:  www.bbmsallahabad.com
		    	</p></footer>
		</div>
	</div>
</body>
</html>