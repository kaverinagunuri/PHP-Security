<?php

session_start();
if(isset($_SESSION['address'])===FALSE)
{
    $_SESSION['address']=$_SERVER['REMOTE_ADDR'];
    
    }
    if($_SESSION['address']!==$_SERVER['REMOTE_ADDR'])
    {
        session_unset();
        session_destroy();
    }
?>
<html>
    <head>
        <title>Session_Hijacking</title>
    </head>
    <body>
        
    </body>
    
</html>