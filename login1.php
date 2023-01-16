<?php
if($_POST["submit"])
{
$user=$_POST["user"];
$pass=$_POST["pass"];
$conn=new mysqli("localhost","root","12345678","MyG");

if($conn->connect_error)
die("Connection Failed");
else
{
$f=0;
$sql="SELECT * FROM c";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
if($user==$row["Name"]&&$pass==$row["Password"])
{
include "Requst.html";
$f=1;
break;
}
}
if($f==0)
echo "Username Or Password is Incorrect";    
}    
}
$conn->close();
?>