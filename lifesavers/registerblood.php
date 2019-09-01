<html>
<head>
<title>register</title>
<link rel="stylesheet" href="styles/reg.css" type="text/css">
<script>
function fun(form)
{
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
		
		var blood= document.getElementById("blood");
        if (blood.value == "Blood group") {
            alert("Please select an blood group");
            return false;
        }
var d= document.getElementById("district");
        if (d.value == "District") {
            alert("Please select an district");
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

function myFun6()
{
	var age= document.getElementById("age");
        if (age.value <18 || age.value>100) {
            alert("Please enter correct age");
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
<form class="form"  name="bloodreg" action="registerblood1.php" method="post" onsubmit="return fun(this)" enctype="multipart/form-data">
<center><table>
<tr><td>
<center><h2 style="color:red">Register</h2></center>
</td></tr>
<tr><td>
<input class="form1" name="name" type="text" placeholder="user name" required autofocus autocomplete />
</td></tr>
<tr><td>
<input class="form1" id="pass" name="pass" type="password" placeholder="password" required onblur="myFun1()"/>
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
<input type="file" name="fileupload" value="fileupload" required id="fileupload" onblur="myFun2()" /> 
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
<input class="form1" id="age" name="age" type="number" placeholder="Age"  required onblur="myFun6()" />
<td></tr>
<tr><td>
<input class="form1" name="mob1" id="mob1" type="number" placeholder="Mobile1" min="5000000000" max="9999999999"  required onblur="myFun7()" />
</td></tr>
<tr><td>
<input class="form1" id="email" name="email" type="email" placeholder="mail id" required onblur="myFun3()" />
</td></tr>
<tr><td>
<select class="form1" id="district" name="district" onblur="myFun4()" required>
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
<select class="form1" id="blood" name="blood" onblur="myFun5()" required>
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
<input type="checkbox" required name="terms">I accept the <a href="condition1.html">Terms and conditions</a><br/>
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