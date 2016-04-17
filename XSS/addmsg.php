<?php
function add_post($message){
    $message=$_POST['message'];
    mysqli_query($link,"INSERT INTO posts VALUES('.$message.')");
    
}
function fetch_posts()
{
    $query="SELECT message FROM posts ";
    $result=  mysqli_query($link, $query);
    $posts=array();
    while($row=mysqli_fetch_assoc($result)!==FALSE)
    {
        $posts[]=$row['message'];
    }    

    return $posts;
    }

?>