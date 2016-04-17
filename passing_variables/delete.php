<?php
$files=  scandir("images1");
unset($files[0],$files[1]);
if(isset($_GET['image'])&& in_array($_GET['image'],$files))
    {
    unlink("images1/{$_GET['image']}");
    echo "success";
    }
    
?>