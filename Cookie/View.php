<html>
    <head>
        <title>
        Cookies
    </title>
            
        
        <?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
if((isset($_POST['email']) || isset($_COOKIE['email'])))
{
    if(isset($_COOKIE['email']))
    {
     $email=  mysqli_real_escape_string($Link,$_COOKIE['email']);
    $password=$_COOKIE['password'];
    }
 else {
        $email=  mysqli_real_escape_string($Link,$_POST['email']);
    $password=$_POST['password'];
    $Credential = "SELECT * FROM Pdo WHERE Email='$email'";
            $Result = mysqli_query($Link, $Credential);
            $Rows = mysqli_fetch_array($Result);
            print_r($Rows);
            if ($Rows) {
                setcookie('email', $email,time()+600);
                setcookie('password',$password,time()+600);
                $_SESSION['login']=1;
}
    }
    
}
}

?>
     
    </head>
    <body>
        <?php

       if(isset($_SESSION['login']))
           echo 'You are Logged In.....';
    ?>
        <form action="" method="post">
        <input type="text" id="email" name="email"/><br/>
        <input type="password" id="password" name="password"/><br/>
        <input type="submit" name="submit"/>
        </form>
       
    </body>
</html>

