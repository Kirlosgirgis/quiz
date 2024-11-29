<html>
    <body>
       <?php
       $user = ["name"=>$_POST["name"], "age"=>$_POST["age"], "password"=>$_POST["pass"]];
         echo "your name  ". $user["name"];
         echo "<br>";

         echo "your age  ". $user["age"];
         echo "<br>";
         echo "your pass  ". $user["password"];

       
       ?>
    </body>
</html>