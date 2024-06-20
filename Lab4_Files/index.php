<html>
  <head>
    <title>Lab 4 - Files</title>
    <style>
      body {
        font-family: 'Roboto', Arial, sans-serif;
      }      
    </style>
  </head>
  <body>
    <?php 
      echo '<h1>Files with PHP</h1>'; 
      echo '<p>Programmed by: Ben Mickens</p>';
      echo '<p>Enter two names to add to a file</p>';
      echo '<form action="response.php" method="get">
              <label for="name1">First Name: <input type="text" name="name1" id="name1" required></label><br><br>
              <label for="name2">Second Name: <input type="text" name="name2" id="name2" required><br><br>
              <input type="submit" value="Add Names">
            </form>';
    ?> 
  </body>
</html>