<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>

  //input
    <form action="aCalculator.php" method="post">
        Num1: <input type = "number" name="num1"> <br>
        OP: <input type="textbox" name="op"><br>
        Num2: <input type = "number" name="num2"> <br>
      <input type="submit">
    </form>
    
  
    <?php 
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if($op == "+")
        {
            echo $num1 + $num2;
        }
        else if($op == "-")
        {
            echo $num1 - $num2;
        }
        else if($op == "/")
        {
            echo $num1 / $num2;
        }
        else if($op == "*")
        {
            echo $num1 - $num2;
        }
        else
        {
            echo "invalid operator";
        }


    ?>



  </body>
</html>
