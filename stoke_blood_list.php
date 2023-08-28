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
                    <a class="active" href="stoke_blood_list.php">Stock Blood</a>
                    <a href="out_stoke_blood.php">Out Stock Blood</a>
                    <a href="exchange_blood.php">Exchange Blood Registration</a>
                    <a href="exchange_list.php">Exchange Blood List</a>
                    <a href="logout.php">Log Out</a>
                </nav><br><br>
                
                <table align="center" cellspacing="0" cellpadding="2">
                	<tr align="center">
                		<th width="200px">Blood Group</th>
                		<th>Quantity</th>
                	</tr>
                	

                	<tr align="center">
                		<td>O+</td>
                		<td>
                			<?php
                			$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
                			echo $row=$q->rowcount();
                			?>
                		</td>
                	</tr> 
                	<tr align="center">
                		<td>A+</td>
                		<td>
                			<?php
                			$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
                			echo $row=$q->rowcount();
                			?>
                		</td>
                	</tr>
                	<tr align="center">
                		<td>B+</td>
                		<td>
                			<?php
                			$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B+'");
                			echo $row=$q->rowcount();
                			?>
                		</td>
                	</tr>
                    <tr align="center">
                        <td>AB+</td>
                        <td>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
                            echo $row=$q->rowcount();
                            ?>
                        </td>
                    </tr>
                    <tr align="center">
                        <td>O-</td>
                        <td>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O-'");
                            echo $row=$q->rowcount();
                            ?>
                        </td>
                    </tr> 
                    <tr align="center">
                        <td>A-</td>
                        <td>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A-'");
                            echo $row=$q->rowcount();
                            ?>
                        </td>
                    </tr>
                    <tr align="center">
                        <td>B-</td>
                        <td>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B-'");
                            echo $row=$q->rowcount();
                            ?>
                        </td>
                    </tr>
                    <tr align="center">
                        <td>AB-</td>
                        <td>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B-'");
                            echo $row=$q->rowcount();
                            ?>
                        </td>
                    </tr>
                			<?php
                			$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
                			echo $row=$q->rowcount();
                			?>
                		</td>
                	</tr>
                </table>
                <?php
               $user=$_SESSION['user'];
               if (!$user) 
               {
                header("Location:index.php");
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