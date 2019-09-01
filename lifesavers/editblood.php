<html>
<head>
<title>register</title>
<link rel="stylesheet" href="styles/reg.css" type="text/css">
<style>
body
{
background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(images/blood.jpg);
	height: 100vh;
	background-size:cover;
	background-position:center;
}
</style>
<script>
function fun(form)
{
 
  var d= document.getElementById("district");
        if (d.value == "District") {
            alert("Please select an district");
            return false;
        }
		var a= document.getElementById("available");
        if (a.value == "Available") {
            alert("Select ur availability");
            return false;
        }
  
 var blood= document.getElementById("blood");
        if (blood.value == "Blood group") {
            alert("Please select an blood group");
            return false;
        }
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
}
</script>
</head>
<body>
<div class="log_in">
<form class="form"  name="bloodreg" action="editblood1.php" method="post" onsubmit="return fun(this)" enctype="multipart/form-data">
<center><table>
<tr><td>
<center><h2 style="color:red">Edit Profile</h2></center>
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
<input type="file" name="fileupload" value="fileupload" required id="fileupload" /> 
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
<select class="form1" id="available" name="available" required>
<option>Available</option>
<option>yes</option>
<option>no</option>
</td>
</tr>
<tr><td>
   
</td></tr>

<tr><td>
   
</td></tr>
<tr><td>
<p id="img"></p>
</td></tr>
<tr><td>
   
</td></tr>
<tr><td>
<input class="submit" value="submit" name="submit" type="submit"/>
</td><tr>

</table>
</center>
</form>
</div>
</body>
</html>