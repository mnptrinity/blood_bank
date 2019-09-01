<html>
<head>
<title>register</title>
<link rel="stylesheet" href="styles/reg1.css" type="text/css">
<script>



function fun(form)
{
 
  
		 var pa=document.getElementById("pass");
 if(pa.value.length<8)
{

 alert("your password is lesser than 8 character");
 return false;
} 

var input=document.getElementById("fileupload");
 file = input.files[0];
 if(file.size>64000)
 {
 alert("your photo size should be within 64kb");
 return false;
 }	


if(!(form.heart.checked || form.kidney.checked || form.eyes.checked))
{
	alert("select atleast any one organ");
	return false;
	
}

		

 
}

</script>
<style>
body
{
background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(images/organ.jpg);
	height: 100vh;
	background-size:cover;
	background-position:center;
}
</style>
</head>
<body>
<div class="log_in">
<form class="form"  name="organdonorreg" action="editorgandonor1.php" enctype="multipart/form-data" onsubmit="return fun(this)" method="post">
<center><table>
<tr><td>
<center><h2 style="color:red">Profile Update</h2></center>
</td></tr>

<tr><td>
<input class="form1" id="pass" name="pass" type="password" placeholder="password" required />
<td></tr>
<tr><td>
<label for="fileupload">your photo:</label>
<br/>
<label for="fileupload">(photo should be within 64kb)</label>
</td></tr>
<tr><td>

</td></tr>
<tr><td>
</td></tr>
<tr><td>
<input type="file" name="fileupload" value="fileupload" required id="fileupload"/> 
</td></tr>
<tr><td>

</td></tr>
<tr><td>
</td></tr>
<tr><td>

</td></tr>
<tr><td>
</td></tr>

<tr><td>
<input class="form1" name="mob1" type="number" placeholder="Mobile1" min ="5000000000" max="9999999999" required />
</td></tr>




<tr><td>
<b>Donating organs:</b>
</td></tr>

<tr><td>

<input type="checkbox" id="organs[]" name="heart" value="heart">Heart<br/>

<input type="checkbox" id="organs[]" name="kidney" value="kidney">Kidney<br/>

<input type="checkbox" id="organs[]" name="eyes" value="eyes">Eyes<br/>

</td></tr>
<tr><td>
   
</td></tr>
<tr><td>
   
</td></tr>
<tr><td>
   
</td></tr>

<tr><td>
   
</td></tr>



<tr><td>
   
</td></tr>
<tr><td>
<input class="submit" value="Submit" type="submit"/>
</td></tr>

</table>
</center>
</form>
</div>
</body>
</html>