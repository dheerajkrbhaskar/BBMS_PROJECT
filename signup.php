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
					<a href="login.php">Login</a>
					<a class="active" href="signup.php">Sign Up</a>
                </nav><br>
                <form action="" method="POST">
				<table id="login" align="center" style="padding-top: 30px;">
					<tr><td colspan="2" align="center"><label id="Reg_Form" style="">Sign Up</label></td></tr>
					<tr>
						<td align="center" colspan="2"><input  type="text" name="name" placeholder="Name" required="required" style="width: 200px;"></td>
					</tr>
					<tr>
						<td align="right"><input  type="text" name="age" placeholder="Age" required="required" style="width: 90px;"></td>
						<td align="left">
							<select name="gender">
								<option>Male</option>
								<option>Female</option>
							</select></td>
					</tr><tr>
						<td align="center" colspan="2"><input  type="text" name="email" placeholder="Email" required="required" style="width: 200px;"></td>
					</tr><tr>
						<td align="center" colspan="2"><input  type="text" name="city" placeholder="City" required="required" style="width: 200px;"></td>
					</tr><tr>
						<td align="center" colspan="2"><input  type="text" name="mobno" placeholder="Mobile No." required="required" style="width: 200px;"></td>
					</tr>
					<tr>
						<td align="center"colspan="2"><input type="Password" name="pass" placeholder="Password" required="required" style="width: 200px;"></td>
					</tr>
					<tr>
						<td align="center"colspan="2"><input type="password" name="cpass" placeholder="Confirm Password" required="required" style="width: 200px;"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="signup" value="Sign Up" style="width: 210px;"></td>
					</tr>
				</table>
			</form>
<?php
			if(isset($_POST['signup']))
			{
				$name=$_POST['name'];
				$age=$_POST['age'];
				$gender=$_POST['gender'];
				$email=$_POST['email'];
				$city=$_POST['city'];
				$mobno=$_POST['mobno'];
				$pass=$_POST['pass'];
				$cpass=$_POST['cpass'];
				$q=$db->prepare("INSERT INTO users(name, age, gender, email, city, mobno, pass) VALUES (:name,:age,:gender,:email,:city,:mobno,:pass)");
				$q->bindValue('name',$name);
				$q->bindValue('age',$age);
				$q->bindValue('gender',$gender);			
				$q->bindValue('email',$email);
				$q->bindValue('city',$city);
				$q->bindValue('mobno',$mobno);
				$q->bindValue('pass',$pass);
				if ($pass!=$cpass) {
					echo "Confirm Password is wrong";
				}
				else{
					if($q->execute())
				{
					header("Location:login.php");
				}
				else
				{
					echo "Sign Up unsuccesful";

				}
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