<?php
if($_POST["insert"])
{
if(empty($_POST["no"]))
msg();
else if(empty($_POST["name"]))
msg();
elseif(empty($_POST["Scientific"]))
msg();
elseif(empty($_POST["Production"]))
msg();
elseif(empty($_POST["Expiry"]))
msg();
elseif(empty($_POST["prise"]))
msg();
else
{
$number=$_POST["no"];
$name=$_POST["name"];
$sci=$_POST["Scientific"];
$pro=$_POST["Production"];
$exp=$_POST["Expiry"];
$price=$_POST["prise"];
$conn=new mysqli("localhost","root","12345678","MyG");
if($conn->connect_error)
die("Connection Error");
else
{
$sql="INSERT INTO Med(Number,Name,Scientific,Production,Expiry,Price) VALUES('$number','$name','$sci','$pro','$exp','$price')";
if($conn->query($sql))
{
echo "New Record Created";
include "Addmedicine.html";
}    
else
{
echo "No Record Created";
include "Addmedicine.html";
}
}   
}
}
if($_POST["select"])
{
if(empty($_POST["no"]))
echo("Number Is Required To Display Info");
else
{
$no=$_POST["no"];
$conn=new mysqli("localhost","root","12345678","MyG");
if($conn->connect_error)
die("Connection Failed");
else
{
$sql="SELECT * FROM med WHERE Number='$no'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
echo "<center><table border=2 >
<tr>
<th>Number</th>
<th>Name</th>
<th>Scientific Name</th>
<th>Production Date</th>
<th>Expiry Date</th>
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
include "addmedicine.html";
}
}
}
if($_POST["update"])
{
    if(empty($_POST["no"]))
    msg();
    else if(empty($_POST["name"]))
    msg();
    elseif(empty($_POST["Scientific"]))
    msg();
    elseif(empty($_POST["Production"]))
    msg();
    elseif(empty($_POST["Expiry"]))
    msg();
    elseif(empty($_POST["prise"]))
    msg();
    else
    {
    $number=$_POST["no"];
    $name=$_POST["name"];
    $sci=$_POST["Scientific"];
    $pro=$_POST["Production"];
    $exp=$_POST["Expiry"];
    $price=$_POST["prise"];
    $conn=new mysqli("localhost","root","12345678","MyG");
    if($conn->connect_error)
    die("Connection Error");
    else
    {
    $sql="UPDATE Med set Name='$name',Scientific='$sci',Production='$pro',Expiry='$exp',Price='$price' WHERE Number='$number'";
    if($conn->query($sql))
    {
    echo "New Record Updated";
    include "Addmedicine.html";
    }    
    else
    {
    echo "No Record Updated";
    include "Addmedicine.html";
    }
    }   
    }
    }
    if($_POST["delete"])
    {
    if(empty($_POST["no"]))
    echo "Number is Requierd To Delete Record";
    else
    {
    $no=$_POST["no"];
    $conn=new mysqli("localhost","root","12345678","MyG");
    $sql="DELETE FROM med WHERE Number='$no'";
    if($conn->query($sql))
    {
    die("Record Deleted");
    include "Addmedicine.html";
    }
    else
    {
    die("No Record Deleted");
    include "Addmedicine.html";
    }   
    }
}
function msg()
{
echo "Some Fields Or All is Empty";
include "Addmedicine.html"; 
}
?>