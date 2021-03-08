<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>

  //input
    <form action="checkboxes.php" method="post">
    apples:      <input type = "checkbox" name ="fruits[]" value="apples"> <br>
    oranges:      <input type = "checkbox" name ="fruits[]" value="oranges"> <br>
    pears:      <input type = "checkbox" name ="fruits[]" value="pears"> <br>
      <input type="submit">
    </form>
    <br>
  
    <?php 
    //get shows the info
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?>

  </body>
</html>
