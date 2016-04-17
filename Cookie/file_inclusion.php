   <?php
   echo "hai";
        if(isset($_GET['Cookie']))
            {
            print_r(scandir('Cookie'));
                include("Cookie/{$_GET['Coookie']}");
            }
       
      ?>
