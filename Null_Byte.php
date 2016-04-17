
<html>
    <head> <title>Null Byte</title></head>
    <body>
        <?php
         $files=  scandir('fileupload');
            unset($files[0],$files[1]);
            //print_r($files);
        if(isset($_GET['file']) && in_array($_GET['file'], $files)){
           
            echo "<h3>Contents of the 'fileupload/{$_GET['file']}'</h3>";
            include "fileupload/{$_GET['file']}";
        }
       ?>
    </body>
</html>