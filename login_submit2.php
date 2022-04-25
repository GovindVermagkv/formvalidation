<?php
session_start();
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_database="techno";

$conn= mysqli_connect($db_hostname,$db_username,$db_password,$db_database);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
    exit;
}  
$email=$_POST['email'];
$password=$_POST['password'];

$sql= "SELECT * FROM `players` WHERE email='$email'AND password='$password'";

$result=mysqli_query($conn,$sql);
if(!$result){
    echo "error find in query ==> " .mysqli_error($conn);
    exit;
}
?>
<h1 style="color:red; text-transform:capitalize;">

<?php

while($row=mysqli_fetch_assoc($result)){
    // echo $row['name']."<br>";
    echo" Welcome....,".$row['fname'].$row['lname'];
}
?>
<br>
<form action="logout.php">
    <input type="submit" value="Logout" style="background-color: blue;color: white;margin: 10px;padding: 5px 20px 5px 20px;">
</form>
<?php

mysqli_close($conn);

?>