 <?php
if($_POST["custmor"])
{
if(empty($_POST["no"]))
msg();
else if(empty($_POST["name"]))
msg();
elseif(empty($_POST["email"]))
msg();
elseif(empty($_POST["pass"]))
msg();
elseif(empty($_POST["phone"]))
msg();
else
{
$Number=$_POST["no"];
$Name=$_POST["name"];
$Email=$_POST["email"];
$Pass=$_POST["pass"];
$Phone=$_POST["phone"];



$conn=new mysqli("localhost","root","12345678","MyG");
if($conn->connect_error)
die("Connection Error");
else
{
   $sql="INSERT INTO c (Number,Name,Email,Password,Phone) VALUES('$Number','$Name','$Email','$Pass','$Phone')";
   if ($conn->query($sql)) {
      echo "New record created successfully";
      include "login1.html";
}    
else
{
echo "No Record Created";
include "Addcustmor.html";
}
}   
}
}

?>