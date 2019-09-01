<?php
if(mysqli_connect("localhost","root","","blood_organ")){
echo("Database :: Connection Successful ");
}
else{
die("Error in SQL Connection");
}
?>
