<html>
   <body>
        <form method = "post" action = "<?php echo $_SERVER['PHP_SELF'];?>">
            <p>Name: <input type = "text" name = "name" /></p>
            <p>Surname: <input type = "text" name = "surname" /></p>
            <p> <input type = "submit" /></p>
        </form> 
      
        <?php
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            echo 'Hello, ' . $name . ' ' . $surname;
        ?>
   </body>
</html>
