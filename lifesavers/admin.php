<!DOCTYPE html>

<html>
<head>
<style>
.headi
{
	text-align:center;
	font-family:Castellar;
	font-size: 40px;
}
.tab
{
	font-size:15px;
	text-align:center;
	padding:5px;
}
table {
    border-collapse: collapse;
	border-radius: 20px;
  }
  th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
  }
  tr:nth-child(even) {
    background-color: #ffcece;
  }
  tr:nth-child(odd) {
    background-color: #fff;
  }
	
</style>
</head>
<body style="background-color:#eee">

<b><h1 class="headi" style="color:red">Life Saver's Users&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/lifesavers/pendingrequest.php"><img src="images/pending1.png" class="imgg" height="60" width="150"></img></a></h1></b>
<form>
<?php
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_organ');

$result1 = mysqli_query($con,"SELECT count(mailid) FROM blood_donor");
$row1 = mysqli_fetch_array($result1);

$result2 = mysqli_query($con,"SELECT count(mailid) FROM blood_donor where bloodgroup='A+'");
$row2 = mysqli_fetch_array($result2);

$result3 = mysqli_query($con,"SELECT count(mailid) FROM blood_donor where bloodgroup='A-' ");
$row3 = mysqli_fetch_array($result3);

$result4 = mysqli_query($con,"SELECT count(mailid) FROM blood_donor where bloodgroup='B+' ");
$row4 = mysqli_fetch_array($result4);

$result5 = mysqli_query($con,"SELECT count(mailid) FROM blood_donor where bloodgroup='B-' ");
$row5 = mysqli_fetch_array($result5);

$result6 = mysqli_query($con,"SELECT count(mailid) FROM blood_donor where bloodgroup='O+' ");
$row6 = mysqli_fetch_array($result6);

$result7 = mysqli_query($con,"SELECT count(mailid) FROM blood_donor where bloodgroup='O-' ");
$row7 = mysqli_fetch_array($result7);

$result8 = mysqli_query($con,"SELECT count(mailid) FROM blood_donor where bloodgroup='AB+' ");
$row8 = mysqli_fetch_array($result8);

$result9 = mysqli_query($con,"SELECT count(mailid) FROM blood_donor where bloodgroup='AB-' ");
$row9 = mysqli_fetch_array($result9);

  ?>
<div id="card" class="hover14 column">
  
 
  <div class="cont">
  <br/>
<center> 
<table class="tab" cellspacing="10" width="75%">
<tr><td colspan="2"> <center><h1 style="color:red">Blood Donors Deatils:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/lifesavers/totalblood.php"><img src="images/View.png" class="imgg" height="50" width="100"></img></a></h1></center></td></tr>
<tr><td width="50%">    <h2><p><b>Total blood donor count</b> </td> &nbsp; &nbsp; &nbsp; &nbsp;  <td> &nbsp; &nbsp; &nbsp;<?php echo $row1[0]; ?></p></h2>  </td>  </tr> 
<tr><td>    <h2><p><b><img src="images/a+.png" height="100" width="100"></img>A+   &nbsp; &nbsp;  blood donor count</b></td> &nbsp; &nbsp; &nbsp; &nbsp; <td>&nbsp; &nbsp; &nbsp;<?php echo $row2[0]; ?></p></h2> </td>  </tr> 
<tr><td>	<h2><p><b><img src="images/a-.png" height="100" width="100"></img>A- &nbsp; &nbsp;  blood donor count</b></td> &nbsp; &nbsp; &nbsp; &nbsp; <td>&nbsp; &nbsp; &nbsp;<?php echo $row3[0]; ?></p></h2> </td>  </tr> 
<tr><td>	<h2><p><b><img src="images/b+.png" height="100" width="100"></img>B+  &nbsp; &nbsp; blood donor count</b></td> &nbsp; &nbsp; &nbsp; &nbsp;<td>&nbsp; &nbsp; &nbsp;<?php echo $row4[0]; ?></p></h2> </td>  </tr> 
<tr><td>	<h2><p><b><img src="images/b-.png" height="100" width="100"></img>B-  &nbsp; &nbsp; blood donor count</b></td> &nbsp; &nbsp; &nbsp; &nbsp; <td>&nbsp; &nbsp; &nbsp;<?php echo $row5[0]; ?></p></h2> </td>  </tr> 
<tr><td>	<h2><p><b><img src="images/o+.png" height="100" width="100"></img>O+  &nbsp; &nbsp; blood donor count</b></td> &nbsp; &nbsp; &nbsp; &nbsp;<td>&nbsp; &nbsp; &nbsp;<?php echo $row6[0]; ?></p></h2> </td>  </tr> 
<tr><td>	<h2><p><b><img src="images/o.png" height="100" width="100"></img>O-  &nbsp; &nbsp; blood donor count</b></td> &nbsp; &nbsp; &nbsp; &nbsp;<td> &nbsp; &nbsp; &nbsp;<?php echo $row7[0]; ?></p></h2> </td>  </tr> 
<tr><td>	<h2><p><b><img src="images/ab+.png" height="100" width="100"></img>AB+ &nbsp; &nbsp;  blood donor count</b></td> &nbsp; &nbsp; &nbsp; &nbsp;<td>&nbsp; &nbsp; &nbsp;<?php echo $row8[0]; ?></p></h2> </td>  </tr> 
<tr><td>	<h2><p><b><img src="images/ab.png" height="100" width="100"></img>AB-  &nbsp; &nbsp; blood donor count</b></td> &nbsp; &nbsp; &nbsp; &nbsp;<td>&nbsp; &nbsp; &nbsp; <?php echo $row9[0]; ?></p></h2> </td>  </tr> 
</table>	
	<br/>
	 <br/>
	  <br/> <br/> <br/> <br/>
</center>	
<?php
$result1 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where approved='yes'");
$row1 = mysqli_fetch_array($result1);

$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where bloodgroup='A+' and approved='yes'");
$r1 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where bloodgroup='A-' and approved='yes'");
$r2 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where bloodgroup='B+' and approved='yes'");
$r3 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where bloodgroup='B-' and approved='yes'");
$r4 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where bloodgroup='AB+' and approved='yes'");
$r5 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where bloodgroup='AB-' and approved='yes'");
$r6 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where bloodgroup='O+' and approved='yes'");
$r7 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where bloodgroup='O-' and approved='yes'");
$r8 = mysqli_fetch_array($res1);

$result2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where heart='yes' and approved='yes'");
$row2 = mysqli_fetch_array($result2);

$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where heart='yes' and bloodgroup='A+' and approved='yes'");
$r9 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where heart='yes' and bloodgroup='A-' and approved='yes'");
$r10 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where heart='yes' and bloodgroup='B+' and approved='yes'");
$r11 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where heart='yes' and bloodgroup='B-' and approved='yes'");
$r12 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where heart='yes' and bloodgroup='AB+' and approved='yes'");
$r13 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where heart='yes' and bloodgroup='AB-' and approved='yes'");
$r14 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where heart='yes' and bloodgroup='O+' and approved='yes'");
$r15 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where heart='yes' and bloodgroup='O-' and approved='yes'");
$r16 = mysqli_fetch_array($res2);

$result3 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where kidney='yes' and approved='yes'");
$row3 = mysqli_fetch_array($result3);

$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where kidney='yes' and bloodgroup='A+' and approved='yes'");
$r17 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where kidney='yes' and bloodgroup='A-' and approved='yes'");
$r18 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where kidney='yes' and bloodgroup='B+' and approved='yes'");
$r19 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where kidney='yes' and bloodgroup='B-' and approved='yes'");
$r20 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where kidney='yes' and bloodgroup='AB+' and approved='yes'");
$r21 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where kidney='yes' and bloodgroup='AB-' and approved='yes'");
$r22 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where kidney='yes' and bloodgroup='O+' and approved='yes'");
$r23 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where kidney='yes' and bloodgroup='O-' and approved='yes'");
$r24 = mysqli_fetch_array($res2);

$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where eyes='yes' and approved='yes'");
$row4 = mysqli_fetch_array($result4);

$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where eyes='yes' and bloodgroup='A+' and approved='yes'");
$r25 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where eyes='yes' and bloodgroup='A-' and approved='yes'");
$r26 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where eyes='yes' and bloodgroup='B+' and approved='yes'");
$r27 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where eyes='yes' and bloodgroup='B-' and approved='yes'");
$r28 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where eyes='yes' and bloodgroup='AB+' and approved='yes'");
$r29 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where eyes='yes' and bloodgroup='AB-' and approved='yes'");
$r30 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where eyes='yes' and bloodgroup='O+' and approved='yes'");
$r31 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_donor where eyes='yes' and bloodgroup='O-' and approved='yes'");
$r32 = mysqli_fetch_array($result4);
	
	?>
<center>
<table class="tab"  width="75%">	
<tr><td colspan="2"><center><h1 style="color:red">Organ Donor Deatils:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/lifesavers/totalorgandonor.php"><img src="images/View.png" class="imgg" height="50" width="100"></img></a></h1></center>		</td></tr>
<tr><td width="50%">		 <h2><p><b>Total organ donor count</b></td><td><center><table width="50%"><tr><td><b> Total:</b></td><td><?php echo $row1[0]; ?></td></tr><tr><td><b>A+</b></td><td> <?php echo $r1[0]; ?></td></tr><tr><td><b>A-</b></td><td> <?php echo $r2[0]; ?></td></tr><tr><td><b>B+</b></td><td> <?php echo $r3[0]; ?></td></tr><tr><td><b>B-</b></td><td> <?php echo $r4[0]; ?></td></tr><tr><td><b>AB+</b></td><td> <?php echo $r5[0]; ?></td></tr><tr><td><b>AB-&nbsp;</b></td><td> <?php echo $r6[0]; ?></td></tr><tr><td><b>O+</b></td><td> <?php echo $r7[0]; ?></td></tr><tr><td><b>O-</b></td><td> <?php echo $r8[0]; ?></td></tr></p></h2> </table></center></td>  </tr>
<tr><td>		 <h2><p><b><img src="images/heart11.png" height="200" width="200"></img>Heart donor count</b></td><td><center><table width="50%"><tr><td><b> Total:</b></td><td><?php echo $row2[0]; ?></td></tr><tr><td><b>A+</b></td><td> <?php echo $r9[0]; ?></td></tr><tr><td><b>A-</b></td><td> <?php echo $r10[0]; ?></td></tr><tr><td><b>B+</b></td><td> <?php echo $r11[0]; ?></td></tr><tr><td><b>B-</b></td><td> <?php echo $r12[0]; ?></td></tr><tr><td><b>AB+</b></td><td> <?php echo $r13[0]; ?></td></tr><tr><td><b>AB-&nbsp;</b></td><td> <?php echo $r14[0]; ?></td></tr><tr><td><b>O+</b></td><td> <?php echo $r15[0]; ?></td></tr><tr><td><b>O-</b></td><td> <?php echo $r16[0]; ?></td></tr></p></h2></table></center> </td>  </tr>
<tr><td>		<h2><p><b><img src="images/kidney11.png" height="200" width="200"></img>Kidney donor count</b></td><td><center><table width="50%"><tr><td><b> Total:</b></td><td><?php echo $row3[0]; ?></td></tr><tr><td><b>A+</b></td><td> <?php echo $r17[0]; ?></td></tr><tr><td><b>A-</b></td><td> <?php echo $r18[0]; ?></td></tr><tr><td><b>B+</b></td><td> <?php echo $r19[0]; ?></td></tr><tr><td><b>B-</b></td><td> <?php echo $r20[0]; ?></td></tr><tr><td><b>AB+</b></td><td> <?php echo $r21[0]; ?></td></tr><tr><td><b>AB-&nbsp;</b></td><td> <?php echo $r22[0]; ?></td></tr><tr><td><b>O+</b></td><td> <?php echo $r23[0]; ?></td></tr><tr><td><b>O-</b></td><td> <?php echo $r24[0]; ?></td></tr></p></h2> </table></center></td>  </tr>
<tr><td>		<h2><p><b><img src="images/eyes11.png" height="200" width="200"></img>Eye donor count</b></td><td><center><table width="50%"><tr><td><b> Total:</b></td><td><?php echo $row4[0]; ?></td></tr><tr><td><b>A+</b></td><td> <?php echo $r25[0]; ?></td></tr><tr><td><b>A-</b></td><td> <?php echo $r26[0]; ?></td></tr><tr><td><b>B+</b></td><td> <?php echo $r27[0]; ?></td></tr><tr><td><b>B-</b></td><td> <?php echo $r28[0]; ?></td></tr><tr><td><b>AB+</b></td><td> <?php echo $r29[0]; ?></td></tr><tr><td><b>AB-&nbsp;</b></td><td> <?php echo $r30[0]; ?></td></tr><tr><td><b>O+</b></td><td> <?php echo $r31[0]; ?></td></tr><tr><td><b>O-</b></td><td> <?php echo $r32[0]; ?></td></tr></p></h2> </table></center></td>  </tr>
	</table>
	</center>
	 <br/>
	  <br/>
	   <br/> <br/> <br/>
<br/>	
<?php
$result1 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient ");
$row1 = mysqli_fetch_array($result1);

$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where bloodgroup='A+' ");
$r1 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where bloodgroup='A-' ");
$r2 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where bloodgroup='B+' ");
$r3 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where bloodgroup='B-' ");
$r4 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where bloodgroup='AB+' ");
$r5 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where bloodgroup='AB-' ");
$r6 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where bloodgroup='O+' ");
$r7 = mysqli_fetch_array($res1);
$res1 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where bloodgroup='O-' ");
$r8 = mysqli_fetch_array($res1);

$result2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where heart='yes' ");
$row2 = mysqli_fetch_array($result2);

$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where heart='yes' and bloodgroup='A+' ");
$r9 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where heart='yes' and bloodgroup='A-' ");
$r10 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where heart='yes' and bloodgroup='B+' ");
$r11 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where heart='yes' and bloodgroup='B-' ");
$r12 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where heart='yes' and bloodgroup='AB+' ");
$r13 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where heart='yes' and bloodgroup='AB-' ");
$r14 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where heart='yes' and bloodgroup='O+' ");
$r15 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where heart='yes' and bloodgroup='O-' ");
$r16 = mysqli_fetch_array($res2);

$result3 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where kidney='yes' ");
$row3 = mysqli_fetch_array($result3);

$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where kidney='yes' and bloodgroup='A+' ");
$r17 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where kidney='yes' and bloodgroup='A-' ");
$r18 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where kidney='yes' and bloodgroup='B+' ");
$r19 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where kidney='yes' and bloodgroup='B-' ");
$r20 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where kidney='yes' and bloodgroup='AB+' ");
$r21 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where kidney='yes' and bloodgroup='AB-' ");
$r22 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where kidney='yes' and bloodgroup='O+' ");
$r23 = mysqli_fetch_array($res2);
$res2 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where kidney='yes' and bloodgroup='O-' ");
$r24 = mysqli_fetch_array($res2);



$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where eyes='yes' ");
$row4 = mysqli_fetch_array($result4);

$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where eyes='yes' and bloodgroup='A+' ");
$r25 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where eyes='yes' and bloodgroup='A-' ");
$r26 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where eyes='yes' and bloodgroup='B+' ");
$r27 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where eyes='yes' and bloodgroup='B-' ");
$r28 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where eyes='yes' and bloodgroup='AB+' ");
$r29 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where eyes='yes' and bloodgroup='AB-' ");
$r30 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where eyes='yes' and bloodgroup='O+' ");
$r31 = mysqli_fetch_array($result4);
$result4 = mysqli_query($con,"SELECT count(mailid) FROM organ_recipient where eyes='yes' and bloodgroup='O-' ");
$r32 = mysqli_fetch_array($result4);


	
	?>
<center>
<table class="tab"  width="75%">	
<tr><td colspan="2"><center><h1 style="color:red">Organ Recipient Deatils:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/lifesavers/totalorganrecipient.php"><img src="images/View.png" class="imgg" height="50" width="100"></img></a></h1></center>		</td></tr>
<tr><td width="50%">		 <h2><p><b>Total organ recipient count</b></td><td><center><table width="50%"><tr><td><b> Total:</b></td><td><?php echo $row1[0]; ?></td></tr><tr><td><b>A+</b></td><td> <?php echo $r1[0]; ?></td></tr><tr><td><b>A-</b></td><td> <?php echo $r2[0]; ?></td></tr><tr><td><b>B+</b></td><td> <?php echo $r3[0]; ?></td></tr><tr><td><b>B-</b></td><td> <?php echo $r4[0]; ?></td></tr><tr><td><b>AB+</b></td><td> <?php echo $r5[0]; ?></td></tr><tr><td><b>AB-&nbsp;</b></td><td> <?php echo $r6[0]; ?></td></tr><tr><td><b>O+</b></td><td> <?php echo $r7[0]; ?></td></tr><tr><td><b>O-</b></td><td> <?php echo $r8[0]; ?></td></tr></p></h2> </table></center></td>  </tr>
<tr><td>		 <h2><p><b><img src="images/heart11.png" height="200" width="200"></img>Heart recipient count</b></td><td><center><table width="50%"><tr><td><b> Total:</b></td><td><?php echo $row2[0]; ?></td></tr><tr><td><b>A+</b></td><td> <?php echo $r9[0]; ?></td></tr><tr><td><b>A-</b></td><td> <?php echo $r10[0]; ?></td></tr><tr><td><b>B+</b></td><td> <?php echo $r11[0]; ?></td></tr><tr><td><b>B-</b></td><td> <?php echo $r12[0]; ?></td></tr><tr><td><b>AB+</b></td><td> <?php echo $r13[0]; ?></td></tr><tr><td><b>AB-&nbsp;</b></td><td> <?php echo $r14[0]; ?></td></tr><tr><td><b>O+</b></td><td> <?php echo $r15[0]; ?></td></tr><tr><td><b>O-</b></td><td> <?php echo $r16[0]; ?></td></tr></p></h2></table></center> </td>  </tr>
<tr><td>		<h2><p><b><img src="images/kidney11.png" height="200" width="200"></img>Kidney recipient count</b></td><td><center><table width="50%"><tr><td><b> Total:</b></td><td><?php echo $row3[0]; ?></td></tr><tr><td><b>A+</b></td><td> <?php echo $r17[0]; ?></td></tr><tr><td><b>A-</b></td><td> <?php echo $r18[0]; ?></td></tr><tr><td><b>B+</b></td><td> <?php echo $r19[0]; ?></td></tr><tr><td><b>B-</b></td><td> <?php echo $r20[0]; ?></td></tr><tr><td><b>AB+</b></td><td> <?php echo $r21[0]; ?></td></tr><tr><td><b>AB-&nbsp;</b></td><td> <?php echo $r22[0]; ?></td></tr><tr><td><b>O+</b></td><td> <?php echo $r23[0]; ?></td></tr><tr><td><b>O-</b></td><td> <?php echo $r24[0]; ?></td></tr></p></h2> </table></center></td>  </tr>
<tr><td>		<h2><p><b><img src="images/eyes11.png" height="200" width="200"></img>Eye recipient count</b></td><td><center><table width="50%"><tr><td><b> Total:</b></td><td><?php echo $row4[0]; ?></td></tr><tr><td><b>A+</b></td><td> <?php echo $r25[0]; ?></td></tr><tr><td><b>A-</b></td><td> <?php echo $r26[0]; ?></td></tr><tr><td><b>B+</b></td><td> <?php echo $r27[0]; ?></td></tr><tr><td><b>B-</b></td><td> <?php echo $r28[0]; ?></td></tr><tr><td><b>AB+</b></td><td> <?php echo $r29[0]; ?></td></tr><tr><td><b>AB-&nbsp;</b></td><td> <?php echo $r30[0]; ?></td></tr><tr><td><b>O+</b></td><td> <?php echo $r31[0]; ?></td></tr><tr><td><b>O-</b></td><td> <?php echo $r32[0]; ?></td></tr></p></h2> </table></center></td>  </tr>
	</table>
	</center>
	<br/>
	&nbsp; &nbsp; &nbsp; &nbsp; 
    <center><a href="http://localhost/lifesavers/logoutvalidate.php"><img src="images/logout.png" height="100" width="100"></img></a></center>
	&nbsp; &nbsp; &nbsp; &nbsp; 
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
