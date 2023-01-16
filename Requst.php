<?php

if($_POST["request"])
{
if(empty($_POST["no"]))
echo "Number Required";
else
{
$no=$_POST["no"];
$conn=new mysqli("localhost","root","12345678","MyG");
$sql="SELECT Name,Price FROM med WHERE Number='$no'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
echo "<center><table border=2>
<tr>
<th>Name</th>
<th>Price</th>
</tr>
<tr>
<td>".$row["Name"]."</td>
<td>".$row["Price"]."</td>
</tr>
</table></center>";
}    
}
if($_POST["query"])
{


$no=$_POST["no"];
$conn=new mysqli("localhost","root","12345678","MyG");
$sql="SELECT * FROM med";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
echo "<center><table border=2>
<tr>
<th>Number</th>
<th>Name</th>
<th>Scientific</th>
<th>Production</th>
<th>Expiry</th>
<th>Price</th>
</tr>
<tr>
<td>".$row["Number"]."</td>
<td>".$row["Name"]."</td>
<td>".$row["Scientific"]."</td>
<td>".$row["Production"]."</td>
<td>".$row["Expiry"]."</td>
<td>".$row["Price"]."</td>
</tr>
</table></center>";    
}
?>