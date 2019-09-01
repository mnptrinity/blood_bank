

<!DOCTYPE html>
<html lang="en">
<head>
<title>CareMed</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CareMed demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
 .hhh
 {
	 margin-top:300px;
 }
.home_title
{
	margin-top:60px;
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
<center><div class="home_title"><h1>Organ Donor List</h1></div></center>
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
						
							<div class="row">
								<div class="col">
									
										<table width="100%" border>
										
										<tr width="20" style="color:red">
										<th>name</th>
										
										<th>Age</th>
										<th>contact no</th>
										<th>Mail Id</th>
										<th>Blood group</th>
								         <th>heart</th>
										 <th>kidney</th>
										 <th>eyes</th>
										</tr>
										
										<?php
                                        
                                        $con= mysqli_connect('localhost','root','');
                                        mysqli_select_db($con,'blood_organ');
                                        
										
                                        $s = " select name,age,mob1,mailid,bloodgroup,heart,kidney,eyes from organ_donor where approved='yes'";
										$result = $con->query($s);
                                       

				                        if($result-> num_rows > 0)
										{
											while( $row = $result-> fetch_assoc())
										{
                                         echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["mob1"]."</td><td>".$row["mailid"]."</td><td>".$row["bloodgroup"]."</td><td>".$row["heart"]."</td><td>".$row["kidney"]."</td><td>".$row["eyes"]."</td></tr>";
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
							</div>
							
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