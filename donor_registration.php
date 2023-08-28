<?php
include('connect.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><a href="home.php"><img src="logo.jpg" width="80px" height="75" align="left" alt="logo"></a><h1>Blood Bank Management System</h1></div>
			<div id="body">
				<nav id="navbar">
					<a href="home.php">About US</a>
					<a class="active" href="donor_registration.php">Donor Registration</a>
					<a href="donor_list.php">Donor List</a>
					<a href="stoke_blood_list.php">Stock Blood</a>
                    <a href="out_stoke_blood.php">Out Stock Blood</a>
					<a href="exchange_blood.php">Exchange Blood Registration</a>
                    <a href="exchange_list.php">Exchange Blood List</a>
                    <a href="logout.php">Log Out</a>
                </nav><br>
                <form action="" method="POST">
				<table id="login" align="center"  cellpadding="3" cellspacing="5">
					<tr><td colspan="3"><label id="Reg_Form">Register as Donor</label></td></tr>
					<tr>
						<td align="center"><input  type="text" name="name" placeholder="Name" required="required" style="width: 200px;"></td>
						<td align="right"><input  type="text" name="age" placeholder="Age" required="required" style="width: 90px;"></td>
						<td align="left">
							<select name="gender">
								<option>Male</option>
								<option>Female</option>
							</select></td>
					</tr>
					<tr>
						<td align="center">
							<input  type="text" name="fname" placeholder="Father's Name" required="required" style="width: 200px;">
						</td>
						<td align="center" colspan="2">
							<input  type="text" name="email" placeholder="Email" required="required" style="width: 200px;">
						</td>
					</tr>
					<tr>
						<td align="center" rowspan="2">
							<textarea name="address" placeholder="Address" required="required" style= "width:200px; height: 60px"></textarea>
						</td>
						<td align="center" colspan="2">
							<input  type="text" name="city" placeholder="City" required="required" style="width: 200px;">
						</td>
					</tr>
					<tr>
						<td align="left" colspan="2">
							<select name="bgroup" required="required" style="width: 210px;">
								<option value="" disabled selected>Select your Blood Group</option>
								<option>O+</option>
								<option>A+</option>
								<option>B+</option>
								<option>AB+</option>
								<option>O-</option>
								<option>A-</option>
								<option>B-</option>
								<option>AB-</option>							</select>
						</td>
					</tr>
					<tr>
						<td align="center">
							<input  type="text" name="mobno" placeholder="Mobile No." required="required" style="width: 200px;">
						</td>
						<td align="center" colspan="2">
							<input type="submit" name="register" value="Register" style="width: 210px;">
						</td>
					</tr>
				</table>
			</form>
			<?php
			if(isset($_POST['register']))
			{
				$name=$_POST['name'];
				$age=$_POST['age'];
				$gender=$_POST['gender'];
				$fname=$_POST['fname'];
				$email=$_POST['email'];
			    $address=$_POST['address'];
				$city=$_POST['city'];
			    $bgroup=$_POST['bgroup'];
				$mobno=$_POST['mobno'];
				$q=$db->prepare("INSERT INTO donor_registration(name,age,gender,fname,email,address,city,bgroup,mobno) VALUES (:name,:age,:gender,:fname,:email,:address,:city,:bgroup,:mobno)");
				$q->bindValue('name',$name);
				$q->bindValue('age',$age);
				$q->bindValue('gender',$gender);
				$q->bindValue('fname',$fname);
				$q->bindValue('email',$email);
				$q->bindValue('address',$address);
				$q->bindValue('city',$city);
				$q->bindValue('bgroup',$bgroup);
				$q->bindValue('mobno',$mobno);
				if($q->execute())
				{
					echo "<script>alert('Donor Registration Successful')</script>";
				}
				else
				{
					echo "<script>alert('Donor Registration fail')</script>";
				}

			}
			$user=$_SESSION['user'];
			   if (!$user) 
			   {
			   	header("Location:index.php");
			   }
			?>

			</div></div><br><br><br><br>
		    <footer id="footer"><strong>Contact Us-</strong>
		    	<p>Address: Unviersity of Allahabad, Prayagraj(U.P.)<br>
		    		Mobile No.<br>
		    	    Website:  www.bbmsallahabad.com
		    	</p></footer>
		</div>
	</div>
</body>
</html>