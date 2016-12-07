<?php
     include "header.php";


        switch($path_info['call_parts'][0]) {
          case 'challenge': 
               include 'challenge_view.php';
                break;

          default:
            include 'front.php';

        }



        include "footer.php";
?>