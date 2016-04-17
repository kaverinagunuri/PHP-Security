<?php
include 'connection.php';
//$Query="SELECT FirstName,Email FROM Pdo WHERE Id=1";
//$Result=  mysqli_query($Link, $Query);
//$Results= mysqli_fetch_array($Result);
if(isset($_POST['submit']))
if(isset($_POST['email']))
{
    $email=  mysqli_real_escape_string($_POST['email']);
    $password=$_POST['password'];
    $users=  mysqli_query($Link,"SELECT COUNT(Id) FROM Pdo WHERE Email=.$email.");
    $result= mysqli_fetch_all($users);
   echo $result;
}
}

?>

