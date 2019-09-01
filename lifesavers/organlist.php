

<!DOCTYPE html>
<html lang="en">
<head>
<title>CareMed</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
.img
{
	width:200px;
	margin-left:0;
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
									<li><a href="http://localhost/lifesavers/organ.html" style="font-size:20px">Home</a></li>
									
									<li><a href="contact1.html" style="font-size:20px">Contact</a></li>
									<li><a href="news1.html" style="font-size:20px">About Us</a></li>
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
										<div class="logo_text">Donate<span>Blood</span></div>
										</div>
									<br/><div class="logo_sub"><h4>#Life Savers</h4></div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>

	</header>

	<!-- Menu -->

	
	<!-- Home -->

	<div class="home">
	
		<div class="home_slider_container">
			<!-- Home Slider -->
			
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item">
				
			
				
					<div class="home_slider_background">
					<div class="link" style="margin-left:1px">
					<div class="home_title"><h1>Organ Donor</h1></div>
					<?php
                                        
                                        $con= mysqli_connect('localhost','root','');
                                        mysqli_select_db($con,'blood_organ');
										$aadhar = $_POST['aadhar'];
										$img= "select image from organ_donor where aadhar = '$aadhar' and approved='yes' ";
										$result=mysqli_query($con,$img);
										
					?>					
					
				    
				    </div>
					</div>
					
					<div class="home_content">
					
						<div class="container">
						
							<div class="row">
								<div class="col">
								
								<center><p class="img">
									
										<?php
										 $s11 = " select name from organ_donor where aadhar = '$aadhar' and approved='yes'";
										#$result11 = $con->query($s);
                                       

				                        #if($result11-> num_rows > 0)
										#{
										while($row = mysqli_fetch_array($result))
										{
											echo '<img   height="200" src="data:$image/jpeg;base64,'.base64_encode($row['image']).'"/>';
							            }
										#}
										?>
								</p></center>		
										
									<br/>
									<br/>
										<table width="100%" border>
										
										<tr width="20" style="color:red">
										<th>name</th>
										<th>Age</th>
										<th>contact</th>
										<th>Blood group</th>
										<th>Heart</th>
										<th>Kidney</th>
										<th>Eyes</th>
								
										</tr>
										
										<?php
                                        
                                        $s = " select name,age,mob1,bloodgroup,heart,kidney,eyes from organ_donor where aadhar = '$aadhar' and approved='yes'";
										$result = $con->query($s);
                                       

				                        if($result-> num_rows > 0)
										{
											while( $row = $result-> fetch_assoc())
										{
                                         echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["mob1"]."</td><td>".$row["bloodgroup"]."</td><td>".$row["heart"]."</td><td>".$row["kidney"]."</td><td>".$row["eyes"]."</td></tr>";
										 $he = $row["heart"];
										 $ki = $row["kidney"];
										 $ey = $row["eyes"];
										 $bg = $row["bloodgroup"];
										}
										
										
					
										echo "</table>";
										}
										else
										{
										 $mess="No match found";
	                                    echo"<script type='text/javascript'>alert('$mess');</script>";
	                                    echo "<script> location.href='http://localhost/lifesavers/organ.html'; </script>";
                                        exit;
										}
										
										
										?>
										<br/>
										
										
										
										
									
								</div>
								
							</div>
							
						</div>
						<div class="home_slider_progress"></div>
						
						
						<br/>
						
						<br/>
						
					</div>
					
					
				</div>
			
				

				
				<!-- Slider Item -->
				

			</div>

			<!-- Slider Progress -->
			
		</div>
	</div>

	<!-- 3 Boxes -->

	<div class="boxes">
		<div class="container">
			<div class="row">
				
				<!-- Box -->
				
<div class="home_title"><h1>Matching Recipients</h1></div>
						
				<!-- Box -->
				
<div class="home_slider_progress"></div>
				<!-- Box -->
				
				
				
					</div>
				</div>

			</div>
		
	


	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- About Content -->
				<table width="100%" border>
										
										<tr width="20" style="color:red">
										<th>name</th>
										<th>Age</th>
										<th>contact</th>
										<th>Blood group</th>
										<th>Heart</th>
										<th>Kidney</th>
										<th>Eyes</th>
								
										</tr>
										<?php
										$s = " select name,age,mob1,bloodgroup,heart,kidney,eyes from organ_recipient where (bloodgroup = '$bg' AND heart = '$he' AND (heart!='no')) OR (bloodgroup = '$bg' AND kidney = '$ki' AND (kidney!='no')) OR (bloodgroup = '$bg' AND eyes = '$ey' AND (eyes!='no'))";
										$result = $con-> query($s);
                                       

				                        if($result-> num_rows > 0)
										{
											while( $row = $result-> fetch_assoc())
										{
                                         echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["mob1"]."</td><td>".$row["bloodgroup"]."</td><td>".$row["heart"]."</td><td>".$row["kidney"]."</td><td>".$row["eyes"]."</td></tr>";
										}
										echo "</table>";
										}
										
										
										$con-> close();
										?>
				
				

				<!-- About Image -->
				
			</div>
		</div>
	</div>

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