<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>

  //input
    <form action="site.php" method="get">
    Name:
      <input type = "text" name ="name">
      <input type="submit">
    </form>
    <br>
  
    <?php 
        //functions
        function sayHi(){
          echo "hi";
        }

        function passingvalue($value)
        {
          echo $value;
        }

        function returnANumber()
        {
          return 1;
        }

        sayHi();
        passingvalue("aValue");
        echo(returnANumber());

        echo $_GET["name"];

        echo("Hello World");
        
        echo "<h1>Header one</h1>";
        //data types
        $phrase = "this is string";
        //int
        $aNumber = -3;
        //float
        $anNumber = 3.333;
        //
        $isbool = false;
        //
        echo $isbool;

        //string
        echo strtoupper($phrase);
        echo strlen($phrase);
        echo $phrase[0];
        $phrase[0] = "d";
        echo str_replace("is", "on", $phrase);
        echo substr($phrase, 2, 4);

        //numbers
        $aNumber++;

        //arrays
        $listofthingsinit = array();
        $listofthings = array("a", "bc", "d");
        $listofthingsmix = array(1, 1.5, "a", true);

        // pairs
        $rules = array("that"=>"this", "these"=>"those");
        echo $rules["that"];
       // echo count ($rules);

       //if else
       $aBool = true;
       if($aBool)
       {
         echo $aBool;
       } 
       else
       {
         echo "nothing";
       }


    ?>



  </body>
</html>
