<?php
if(isset($_FILES['image']))
{
    $allow=array('jpg','jpeg','gif','png');
    $ext= strtolower(substr($_FILES['image']['name'],  strrpos($_FILES['image']['name'],'.') + 1));
    $error=array();
   if(in_array($ext, $allow)===false)
  {
       $error[]="you can only upload images";
   }
   if($_FILES['image']['size']>100000){
       $error[]="your file is too big to upload";
   }
           if(empty($error)){
    move_uploaded_file($_FILES['image']['tmp_name'], "images/{$_FILES['image']['name']}");
   }
    
    
}
?>
<html>
    <head>
        <title>
            FILE UPLOAD
        </title>
        
    </head>
    <body>
        <?php
        if(isset($error))
        {
            if(empty($error)){
                 echo "<h4><a href=images/",$_FILES['image']['name'],">View Image</a></h4>";
            }
       else
            {
                foreach ($error as $value) {
                    echo "$value <br/>";
                    
                }
        }
        }
      ?>
        <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image"/>
        <input type="submit" name="submit"/>
        </form>
    </body>
    
</html>