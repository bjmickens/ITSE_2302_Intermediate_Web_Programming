<html>
  <head>
    <title>Add Numbers from Form</title>
  </head>
  <body>
    <?php        
      if(isset($_GET["num1"]) && isset($_GET["num2"])) {
      $num1 = htmlspecialchars($_GET["num1"]);
      $num2 = htmlspecialchars($_GET["num2"]);
        if(!is_numeric($num1) || !is_numeric($num2)){
          echo "One or both of the inputs are not numeric. Please enter two numbers.";
        } else {
          $sum = $num1 + $num2;
          echo "The sum of $num1 and $num2 is $sum.";
        }      
      } else {
        echo "Please enter two numbers.";
      }
    ?>
  </body> 
</html>    

