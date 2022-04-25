<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ragistration Successfully</title>
    <link rel="stylesheet" href="ragister.css">
</head>
<body>
    


<?php

$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_database="techno";

$conn= mysqli_connect($db_hostname,$db_username,$db_password,$db_database);
?>
<h1 class="sbt"><?php
if(!$conn){
    echo "connection failed".mysqli_connect_error();
    exit;
}

$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$interest=$_POST["interest"];
$city=$_POST["city"];

$sql="INSERT INTO `players` (`fname`, `mname`, `lname`, `email`, `password`, `gender`, `interest`, `city`) VALUES ('$fname', '$mname', '$lname', '$email', '$password', '$gender', '$interest', '$city')";

$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Email Already Exist. Try with new email.";
    exit;
}

echo "Ragistration Successfull <br> (Now you can LOGIN)";
?><br>
<a href="login_form2.php">Login Here</a>
<?php
mysqli_close($conn);

?></h1>

</body>
</html>
