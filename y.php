<?php
$name = $pass = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = test_input($_POST["name"]);
 $pass = test_input($_POST["pass"]);
}
function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
    $user=$_POST["user"];
    $pass=$_POST["pass"];
    if($user=="admin" && $pass=="12345")
    include "Addmedicine.html";
    else
    echo "not found";
    ?> 