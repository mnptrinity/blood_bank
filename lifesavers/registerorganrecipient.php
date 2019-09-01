<html>
<head>
<title>register</title>
<link rel="stylesheet" href="styles/reg1.css" type="text/css">
<script>

function fun(form)
{
 
  var d= document.getElementById("district");
        if (d.value == "District") {
            alert("Please select a district");
            return false;
        }
 var blood= document.getElementById("blood");
        if (blood.value == "Blood group") {
            alert("Please select the blood group");
            return false;
        }
var pa=document.getElementById("pass");
 if(pa.value.length<8)
{

 alert("your password is lesser than 8 character");
 return false;
}
 
var email=document.getElementById("email");
	 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(email.value) == false) 
        {
            alert('Invalid Email Address');
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

function myFun1()
{
	var pa=document.getElementById("pass");
 if(pa.value.length<8)
{

 alert("your password is lesser than 8 character");
 return false;
} 

}
function myFun2()
{
	var input=document.getElementById("fileupload");
 file = input.files[0];
 if(file.size>64000)
 {
 alert("your photo size should be within 64kb");
 return false;
 }	
}
function myFun3()
{
	 var email=document.getElementById("email");
	 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(email.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }
}

</script>
<style>
body
{
	background-attachment:fixed;
}
</style>
</head>
<body>
<div class="log_in">
<form class="form"  name="organrecipientreg" action="registerorganrecipient1.php" enctype="multipart/form-data"  method="post" onsubmit="return fun(this)">
<center><table>
<tr><td>
<center><h2 style="color:red">Register</h2></center>
</td></tr>
<tr><td>
<input class="form1" name="name" type="text" placeholder="user name" required autofocus autocomplete />
</td></tr>
<tr><td>
<input class="form1" id="pass" name="pass" type="password" placeholder="password" required onblur="myFun1()" />
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
<input type="file" name="fileupload" value="fileupload" id="fileupload" onblur="myFun2()" required/> 
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
<input class="form1" name="age" type="number" placeholder="Age" min="18" required />
<td></tr>
<tr><td>
<input class="form1" name="mob1" type="number" placeholder="Mobile1" min ="5000000000" max="9999999999" required />
</td></tr>

<tr><td>
<input class="form1" id="email" name="email" type="email" placeholder="mail id" onblur="myFun3()" required />
</td></tr>

<tr><td>
<select class="form1" id="district" name="district" required onblur="myFun4()">
<option>District</option>
<option>chennai</option>
<option>coimbatore</option>
<option>erode</option>
<option>salem</option>
<option>namakal</option>
<option>trichy</option>
<option>kanyakumari</option>
</select></td>
</tr>

<tr><td>
<b>Donating organs:</b>
</td></tr>

<tr><td>

<input type="checkbox" name="heart" id="organs[]" value="heart">Heart<br/>

<input type="checkbox" name="kidney" id="organs[]" value="kidney">Kidney<br/>

<input type="checkbox" name="eyes" id="organs[]" value="Eyes">Eyes<br/>



</td></tr>
<tr><td>
   
</td></tr>
<tr><td>
   
</td></tr>
<tr><td>
   
</td></tr>
<tr><td>
<select class="form1" id="blood" name="blood" required onblur="myFun5()">
<option>Blood group</option>
<option>O+</option>
<option>O-</option>
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>AB+</option>
<option>AB-</option>
</select></td>
</tr>
<tr><td>
   
</td></tr>
<tr><td>
<input type="checkbox" required name="terms">I accept the <a href="condition3.html">Tearms and conditions</a><br/>
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