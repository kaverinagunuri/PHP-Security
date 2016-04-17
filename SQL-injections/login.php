<?php
include 'connection.php';
/*function sqlinjection($input){
    if(get_magic_quotes_gpc()){
        $input=  stripslashes($input);
    }
    return mysqli_real_escape_string($link,$input);
}*/
if (isset($_POST['submit'])) {
  $x = mysqli_real_escape_string($link, $_POST['email']);
  //  $x=sqlinjection($_POST['email']);
        $y = ($_POST['password']);
            $Credential = "SELECT * FROM UserData WHERE EmailId='$x' AND Password='$y'";
            $result1 = mysqli_query($link, $Credential);
            $row = mysqli_fetch_array($result1);
            if ($row) {
                echo 'access granted';
            }
            else{
                echo 'invalid credentials';
            }
               
}

            
    


?>

<html>
    <head>
        <title>SQL Injection</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="email" />
            <input type="password" name="password"/>
            <input type="submit" name="submit"/>
        </form>
    </body>
</html>