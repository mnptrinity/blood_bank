<!DOCTYPE html>

<html>
<head>
<style>
#card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  color:red;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}


a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
 a:hover {
  opacity: 0.7;
}
p
{
margin-left:50px;
}
h2
{
color:red;
}
.cont
{
background-color:#ffc9cd;
}

.hover14 figure {
	position: relative;
}
.hover14 figure::before {
	position: absolute;
	top: 0;
	left: -75%;
	z-index: 2;
	display: block;
	content: '';
	width: 50%;
	height: 100%;
	background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	-webkit-transform: skewX(-25deg);
	transform: skewX(-25deg);
}
.hover14 figure:hover::before {
	-webkit-animation: shine 2.5s;
	animation: shine 2.5s;
}
@-webkit-keyframes shine {
	100% {
		left: 125%;
	}
}
@keyframes shine {
	100% {
		left: 125%;
	}
}
.button {
  
  font-size: 10px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  height:35px;
  background-color: #3714e5;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: red}

.button:active {
  background-color: red;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
</head>
<body>

<h2 style="text-align:center">Donor card</h2>
<form>
<?php
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_organ');
$g=$_SESSION["sess_user"];
$result = mysqli_query($con,"SELECT * FROM organ_donor where mailid = '$g'");

while($row = mysqli_fetch_array($result))
{
  ?>
<div id="card" class="hover14 column">
  <center><figure><?php echo '<img width="100%" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'; ?></figure></center>
  <br/>
  <div class="cont">
  <br/>
  
  <h2><p><b>NAME</b>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row["name"]; ?></p></h2> 
  <p><b>Blood group</b>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row["bloodgroup"]; ?></p>
  <p><b>Donating Organs:</b></p>
  <p><b>Heart</b>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row["heart"]; ?></p>
  <p><b>Kidney</b>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row["kidney"]; ?></p>
  <p><b>Eyes</b>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row["eyes"]; ?></p>
  <p><b>District</b>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row["district"]; ?></p>
	<p><b>Contact1</b>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row["mob1"]; ?> </p>
	<br/>
	<?php 
	
	
	}
	
	?>	
	&nbsp; &nbsp; &nbsp; &nbsp; 
    <a href="http://localhost/lifesavers/logoutvalidate.php"><img src="images/logout.png" height="100" width="100"></img></a>
	&nbsp; &nbsp; &nbsp; &nbsp; 
	<a href="http://localhost/lifesavers/editorgandonor.php"><img src="images/edit.png" height="100" width="100"></img></a>
	<br/>
	<p>    </p>
	<br/>
	<p>    </p>
  </div>
  
</div>
</form>
</form>
</body>
</html>
