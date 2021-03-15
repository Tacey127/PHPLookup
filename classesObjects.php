<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>


    <?php
    
    class Book {
        public $title;
        var $author;
        private $pages;

        function __construct($_title)
        {
          echo "ctor";
          $this->title = $_title;
        }

        function speak()
        {
          echo $this->title;
        }

        function setPages($num)
        {
          $this->pages = $num;
        }

        function getPages()
        {
          return $this->pages;
        }

    }


    $book1 = new Book("au");
    $book1->title = "auth";


    //inheritance
    class WierdBook extends Book
    {
        function speak()
        {
          echo "auaudf";
        }
    }



    ?>


  </body>
</html>
