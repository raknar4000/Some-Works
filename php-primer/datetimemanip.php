<?php
        $title = "Datetime";
        include 'includes/header.php'    
     
     ?>

    <h1>Date and Time Manipulation</h1>

    <?php 
        $datenow = getdate();
        echo "Today's Date <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';

        echo "Today's Date: " . $datenow['mon'] . '/' . $datenow['mday'] . '/'. $datenow['year'];
        '<br/>';


    ?>

<?php require 'includes/footer.php' ?>