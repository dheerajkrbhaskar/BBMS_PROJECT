<?php
include('connect.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		table{
			margin-left: 30px;
			margin-right: 30px;
			border-top: 1px solid;
			border-left: 1px solid;
			border-color: white;
			color: #fff;
			font-family: sans-serif;
			font-size: 17px;
			font-weight: 400px;
		}
		table tr th{
			background-color: #fff;
			color: #E91D26;
		}
		table tr td{
			border-right: 1px solid;
			border-bottom: 1px solid;
			border-color: #fff;
		}
	</style>
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><a href="home.php"><img src="logo.jpg" width="80px" height="75" align="left" alt="logo"></a><h1>Blood Bank Management System</h1></div>
			<div id="body">
				<nav id="navbar">
					<a href="home.php">About US</a>
                    <a href="donor_registration.php">Donor Registration</a>
					<a href="donor_list.php">Donor List</a>
					<a href="stoke_blood_list.php">Stock Blood</a>
                    <a href="out_stoke_blood.php">Out Stock Blood</a>
					<a href="exchange_blood.php">Exchange Blood Registration</a>
                    <a class="active" href="exchange_list.php">Exchange Blood List</a>
                    <a href="logout.php">Log Out</a>
                </nav><br><br>
                
                <table align="center" cellspacing="0" cellpadding="2">
                	<tr align="center">
                		<th width="200px">Name</th>
                		<th>Age</th>
                		<th>Gender</th>
                		<th width="200px">Father's Name</th>
                		<th width="200px">Email</th>
                		<th width="300px">Address</th>
                		<th width="100px">City</th>
                		<th>Blood Group</th>
                		<th>Exchange Blood Group</th>
                		<th width="120px">Mobile No.</th>
                	</tr>
                	<?php
                	$q=$db->query("SELECT * FROM exchange_blood");
                	while($r1=$q->fetch(PDO::FETCH_OBJ))
                	{
                		?>
                		<tr align="center">
                		<td><?= $r1->name; ?></td>
                		<td><?= $r1->age; ?></td>
                		<td><?= $r1->gender; ?></td>
                		<td><?= $r1->fname; ?></td>
                		<td><?= $r1->email; ?></td>
                		<td><?= $r1->address; ?></td>
                		<td><?= $r1->city; ?></td>
                		<td><?= $r1->bgroup; ?></td>
                		<td><?= $r1->exbgroup; ?></td>
                		<td><?= $r1->mobno; ?></td>
                	</tr>
                	<?php
                	}
                	$user=$_SESSION['user'];
			   if (!$user) 
			   {
			   	header("Location:index.php");
			   }

                	?>
                	
                </table>

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