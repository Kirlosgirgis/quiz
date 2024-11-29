<html>
    <body>
       <?php
       $user = ["name"=>"kiro", "password"=>"12345"];
        if ($_POST["name"] == $user["name"] & $_POST["pass"] ==$user["password"]) {
            echo "Welcome ". $_POST["name"];
            echo"<br>";
            

        }else {
            echo "error";
        }

       
       ?>
    </body>
</html>