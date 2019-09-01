<html>
<head>
<title>register</title>
<link rel="stylesheet" href="styles/reg.css" type="text/css">
<script>

function fun(form)
{
	 var email=document.getElementById("email");
	 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(email.value) == false) 
        {
            alert('Invalid Email Address');
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
<form class="form"  name="bloodreg" action="registeremergency1.php" method="post" onsubmit="return fun(this)" enctype="multipart/form-data">
<center><table>
<tr><td>
<center><h2 style="color:red">Register</h2></center>
</td></tr>
<tr><td>
<input class="form1" name="name" type="text" placeholder="user name" required autofocus autocomplete />
</td></tr>




<tr><td>
<input class="form1" id="age" name="age" type="number" placeholder="Age"  required  />
<td></tr>
<tr><td>
<input class="form1" name="aadhar" type="number" placeholder="Aadhar" min="111111111111" max="999999999999" required />
</td></tr>
<tr><td>
<input class="form1" id="email" name="email" type="email" placeholder="mail id" required onblur="myFun3()" />
</td></tr>
<tr><td>
<label for="mob1">Enter your relative's contacts</label>
</td></tr>
<tr><td>
<input class="form1" name="mob1" id="mob1" type="number" placeholder="Mobile1" min="5000000000" max="9999999999"  required  />
</td></tr>
<tr><td>
<input class="form1" name="mob2" id="mob2" type="number" placeholder="Mobile2" min="5000000000" max="9999999999"  required  />
</td></tr>
<tr><td>
<input class="form1" name="mob3" id="mob3" type="number" placeholder="Mobile3" min="5000000000" max="9999999999"  required onblur="myFun7()" />
</td></tr>






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