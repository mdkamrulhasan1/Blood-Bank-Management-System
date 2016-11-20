<?php require ("config.php"); ?>
<html>
<style>

* {
    margin: 0;
    padding: 0;
}
body {
    background: white none repeat scroll 0 0;
    height: 100%;
    margin: 0 auto;
    width: 100%;
}
.main {
    background: white none repeat scroll 0 0;
    border: 3px solid green;
    height: 850px;
    margin: 0 auto;
    width: 90%;
}
.header {
    font-family: Times new roman;
    font-size: 20px;
    position: relative;
    width: 100%;
}
.header img {
    border: 0 solid green;
    border-radius: 0;
    height: 350px;
    width: 100%;
}
h2 {
    color: white;
    left: 20px;
    position: absolute;
    top: 210px;
    width: 100%;
}
.navigation {
    margin-left: 15px;
    padding: 0;
    
}
.navigation ul {
    margin: 10px auto 0 95px;
    padding: 0;
   
}
.navigation ul li {
    background: green none repeat scroll 0 0;
    border-radius: 3px;
    display: block;
    float: left;
    font-family: times new roman;
    list-style-type: none;
    margin: 2px;
    overflow: hidden;
    padding: 10px;
    
}
.navigation ul li a {
    color: white;
    font-size: 20px;
    text-decoration: none;
}
.navigation ul li:hover {
    background-color: red;
}
.middel {
    height: 300px;
    overflow: hidden;
    padding-top: 20px;
    width: 100%;
}
h1 {
    color: red;
    font-family: Times New Roman;
    font-size: 40px;
    padding-top: 175px;
    text-align: center;
}
.maincontent {
    height: auto;
    width: 960px;
}
.maincontent h2 {
    text-align: center;
}
#footer {
    clear: both;
    color: #999999;
    font-family: Times New Roman;
    font-size: 85%;
    padding-bottom: 15px;
    padding-top: 64px;
    text-align: center;
    width: 95%;
}

  
</style>
    <head>
        <title>Blood Bank Management System</title>
		
    </head>
			
    <body>
    <div class="main">
		<div class="header">
            <img src="bb.jpg" alt="Header">
				<h2><b>Blood_Bank Management</br> System</b></h2>
            
        </div>   

		<div class="navigation">
			<ul>
				<li><a href="iindex.html">Home</a></li>
				<li><a href="donor_reg.html">Donor Registration</a></li>
				<li><a href="donorlist.html" target="_blank">Donar list</a></li>
				<li><a href="request_for_blood.HTML" target="_blank">Request for Blood</a></li>
				<li><a href=".html" target="_blank">Blood Request List</a></li>
				<li><a href="stock.html" target="_blank">Stock</a></li>
				<li><a href="admin_after_login.html" target="_blank">Admin Login</a></li>		
			</ul>
		</div>

		<div class="maincontent">
			<br><br/> 
			<table>
				<br><br><br>
				<caption><strong>Donar list</strong></caption>
				<th>Name</th>
				<th>Blood_Group</th>
				<th>Gender</th>
				<th>Phone</th>

				<?php

					$sql = "SELECT name, blood_group, gender, contact_no FROM donor";
					$result = $conn->query($sql);

					if ($result==true) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
					 
							echo "<tr>";
					 
								echo "<td>".$row['name']."</td>";
						 
								echo "<td>".$row['blood_group']."</td>";
								
								echo "<td>".$row['gender']."</td>";
						 
								echo "<td>".$row['contact_no']."</td>";
							
							echo "</tr>";
							
							}
					} else {
						echo ("<h1>List empty!</h1>");
					}
					$conn->close();
				?>

			</table> 
			<br />
			<br />
			<br />
			<br />
		</div>
		
		<div class="middel"><h1><marquee>Donate Blood and Save Life</marquee></h1></div>
	</div>
    </body>
	
</html>