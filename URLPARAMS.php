<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>

  //input
    <form action="URLPARAMS.php" method="get">
    Name:      <input type = "text" name ="name"> <br>
      <input type="submit">
    </form>
    <br>
  
    <?php 
    //get shows the info
        echo $_GET["name"];
        echo $_GET["number"];//place number in url php?number=1234
    ?>


  //postvsget

  <form action="URLPARAMS.php" method="post">
    Name:      <input type = "password" name ="password"> <br>
      <input type="submit">
    </form>
    <br>

  <?php
  //doesnt show in url. generally more secure
  echo $_POST["password"];
  ?>

  </body>
</html>
