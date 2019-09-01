

<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="styles/reg1.css" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<script>
function myfun()
{
   if(!(form.accept.checked || form.deny.checked ))
{
	alert("select atleast any one option");
	return false;
	
} 	
if((form.accept.checked && form.deny.checked ))
{
	alert("select atmost one option only");
	return false;
	
} 	
}
</script>
<style>
.loggg:hover
{
  color:white;
}
.link
{
text-align:center;
}
table
{
border-collapse: collapse;
  width: 100%;
}
th, td 
{
  text-align: left;
  padding: 8px;
}
tr:nth-child(even)
 {
 background-color: #f2f2f2;
 }
 .hhh
 {
	 margin-top:300px;
 }
.home_title
{
	margin-top:60px;
}
.submit
{
	height:10px;
	width:5px;
}
</style>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_200">
		
		
		<!-- Header Content -->
		<div class="header_container" style="background-color:#ff2323">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav ml-auto">
						<ul>
									
									<li><a href="http://localhost/lifesavers/admin.php" style="font-size:20px">Back</a></li>
								</ul>
								
								
							</nav>
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo -->
		<div class="logo_container_outer">
			<div class="container" >
				<div class="row">
					<div class="col">
						<div class="logo_container" style="background-color:red">
							<a href="#">
								<div class="logo_content d-flex flex-column align-items-start justify-content-center">
									<div class="logo_line"></div>
									<div class="logo d-flex flex-row align-items-center justify-content-center">
										<div class="logo_text">Donate<span>Organ</span></div>
										</div>
									<br/><div class="logo_sub"><h4>#Life Savers</h4></div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>
<center><div class="home_title"><h1>Organ Donor pending List</h1></div></center>
	</header>

	<!-- Menu -->

	
	<!-- Home -->

	<div class="home">
	
		<div class="home_slider_container">
			<!-- Home Slider -->
			
			<div>
				
				<!-- Slider Item -->
				<div class="owl-item">
				
			
				
					<div class="home_slider_background">
					<div class="link" style="margin-left:1px">
					
				    
				    </div>
					</div>
					
					<div class="hhh">
					
						<div class="container">
						<form name="form" method="post" action="approval.php" enctype="multipart/form-data" onsubmit="return myfun()">
							<div class="row">
								<div class="col">
									
										<table width="100%" border>
										
										<tr width="20" style="color:red">
										<th>name</th>
										
										<th>Age</th>
										<th>contact no</th>
										<th>Mail Id</th>
										<th>aadhar</th>
										<th>District</th>
										<th>Blood group</th>
						                <th>heart</th>	
                                        <th>kidney</th>	
                                        <th>eyes</th>
										<th>donor form</th>
										<th>Approval</th>
										<th>Deny</th>
										<th>Submit</th>
										</tr>
										
										<?php
                                        
                                        $con= mysqli_connect('localhost','root','');
                                        mysqli_select_db($con,'blood_organ');
                                        
										
                                        $s = " select name,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,donorform from approval ";
										$result = $con->query($s);
                                       

				                        if($result-> num_rows > 0)
										{
											while( $row = $result-> fetch_assoc())
										{
											$donorform='<img width="50%" src="data:image/jpeg;base64,'.base64_encode( $row['donorform'] ).'"/>';
										
										?>	
											<tr>
											<td><?php echo $row["name"]; ?></td>
											
											<td><?php echo $row["age"]; ?></td>
											<td><?php echo $row["mob1"]; ?></td>
											<td><?php echo $row["mailid"]; ?></td>
											<td><?php echo $row["aadhar"]; ?></td>
											<td><?php echo $row["district"]; ?></td>
											<td><?php echo $row["bloodgroup"]; ?></td>
											<td><?php echo $row["heart"]; ?></td>
											<td><?php echo $row["kidney"]; ?></td>
											<td><?php echo $row["eyes"]; ?></td>
											<td><?php echo $donorform; ?></td>
											<td><form><input type="checkbox" id="accept" name="accept" value="accept">Accept</td>
											<td><input type="checkbox" id="deny" name="deny" value="deny">Deny</form></td>
                                            
                                            <td><center><input type="submit" name="submit"></center></td>
                                                 
											</tr>
                                        <?php
										
										}
										echo "</table>";
										}
										else
										{
										
										 $mess="No record found";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/admin.php'; </script>";
        exit;
										 
										}
										
										$con-> close();
										?>
										
										
									
								</div>
							</div><br/>
							<br/>
							
							</form>
						</div>
					</div>
				</div>
			
				

				
				<!-- Slider Item -->
				

			</div>

			<!-- Slider Progress -->
			<div class="home_slider_progress"></div>
		</div>
	</div>

	<!-- 3 Boxes -->

	

	<!-- About -->

	

	<!-- Departments -->

	
				<!-- Department -->
			
	<!-- Services -->

	
	<!-- Footer -->

	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>