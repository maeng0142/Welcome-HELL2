<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>functions</title>
  </head>
  <body>
    <h1>function</h1>
    <h2>Basic</h2>
    <?php
      function basic(){
        print("Lorem ipsum dolor1<br>");
        print("Lorem ipsum dolor2<br>");
      }

      basic();
      basic();
      basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
    function sum($left, $ringt){
      print($left+$ringt);
      print("<br>");
    }
    sum(2,4);
    sum(4,7);
    ?>
    <h2>return</h2>
    <?php
    function sum2($left, $right){
      return $left+$right;
    }
    print(sum2(2,4));
    file_put_contents('result.txt', sum(2,4));
    //email('manegsj01@gmail.com', sum2(2,4));
    //upload('maengsj.com')

    ?>
  </body>
</html>
