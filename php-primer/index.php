    <?php
        $title = "Index";
        include 'includes/header.php'    
     
     ?>
    <!-- Basic HTML -->
    <h1>HEllo HTML -PHP Primer</h1>
    <br/>
    <?php
        //printing to html using echo
        echo 'Hello PHP!';
        // You can echo html tags
        echo'<br/>';
        echo 'Second Line';
        echo '<br/>';
        // Variables need a'$'. They are not strongely typed
        $name = 'Ragnar Lall';
        $age = 35;
        // echo variable
        echo $name;
        echo '<h1>My name is: '.$name.' </h1>';
        echo '<h1>My age is: '.$age.' </h1>';
        //Echo using double quotes and interpolation
        echo "<h1>My name is: $name </h1>";
        ?>
        <button type="button" class="btn btn-danger">CLICK ME!</button>
        <button type="button" class="btn btn-primary">CLICK ME!</button>
        <button type="button" class="btn btn-success">CLICK ME!</button>
        <a href="https://www.heroku.com" target="_blank"class="btn btn-success">Heroku.com</a>
     
    
        <?php require 'includes/footer.php' ?>

    