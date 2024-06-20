<html>
  <head>
    <title>Lab 4 - Files</title>
    <style>
      p {
        font-family: 'Roboto', Arial, sans-serif;     
        }
    </style>
  </head>
  <body>
    <?php 
      if(isset($_GET['name1']) && isset($_GET['name2'])) {      
        $name1 = htmlspecialchars($_GET["name1"]);
        $name2 = htmlspecialchars($_GET["name2"]);
          $namesFile = fopen("names.txt", "w");        
          if($namesFile) {
            fwrite($namesFile, $name1 . "\n" . $name2);      
            fclose($namesFile);
            echo "<p>The names <strong>$name1</strong> and <strong>$name2</strong> have been added to the file.</p>";
            echo "<a href='index.php'>Back to Main Page</a>";
          } else {
          echo "There was an error opening the file.";
          }
      } else {
        echo "Please enter two names to add to a file";
      }
    ?>
</body>  
</html>
