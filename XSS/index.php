<?php
include 'connection.php';
include 'addmsg.php';
if(isset($_POST['post']))
{
    add_post($_POST['message']);
}
$posts=fetch_posts();
?>
<html>
    <head>
        <title>XSS</title>
    </head>
    
    <body>
        <div>
            <hr/>
            <?php
            foreach ($posts as $value) {
                echo $value;
               echo '<hr/>';                
            }
            
            
            ?>
            
        </div>
        <form action="" method="post">
            <p>
                <textarea name="message" rows="5" cols="50"></textarea>
            </p>
            <input type="submit" name="post"/>
        </form>
    </body>
</html>