<html>
  <head>
    <title>Lab 5 - Conditions</title>
    <style>
      .quote {
        font-style: italic;
        color: #333;
        margin-top: 20px;
        text-align: center;
        font-size: 1.2em;
      }
      .poster {
      display: block;
      margin: 20px auto;
      max-width: 100%;
      height: auto;
      }
      .back-button {
        display: block;
        margin: 20px auto;
        text-align: center;
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
      }
      .back-button:hover {
        background-color: #555;
      }
    </style>
  </head>  
  <body>
    <?php 
    if(isset($_GET['movie'])) {
      $movie = htmlspecialchars($_GET["movie"]);
      $quote = "";
      $poster = "";
      switch ($movie) {
        case 1:
          $quote = "\"Frankly, my dear, I don't give a damn.\"";
          $poster = "https://xl.movieposterdb.com/07_11/1939/31381/xl_31381_035f678b.jpg?v=2024-06-12%2016:03:41";
          break;
        case 2:
          $quote="\"I'm going to make him an offer he can't refuse.\"";
          $poster = "https://xl.movieposterdb.com/22_07/1972/68646/xl_68646_8c811dec.jpg?v=2024-06-03%2013:09:13";
          break;
        case 3:
          $quote="\"You're gonna need a bigger boat.\"";
          $poster = "https://xl.movieposterdb.com/08_06/1975/73195/xl_73195_a4183f3d.jpg?v=2024-06-17%2023:09:19";
          break;
        case 4:
          $quote="\"Life is like a box of chocolates, you never know what you're gonna get.\"";
          $poster = "https://xl.movieposterdb.com/20_08/1994/109830/xl_109830_439ed30c.jpg";
          break;
        case 5:
          $quote="\"May the Force be with you.\"";
          $poster = "https://xl.movieposterdb.com/06_07/1977/0076759/xl_123404_0076759_e7bfc429.jpg?v=2024-06-17%2014:23:23";
          break;
        default:
          echo "<p>Invalid input. Please enter a number between 1 and 5.</p>";
      }
      echo "<p class='quote'>$quote</p>";
      echo "<img src='$poster' alt='Movie Poster' class='poster'>";
      echo "<a href='index.php' class='back-button'>Back to Main Page</a>";
    } else {
      echo "<p>Please enter a number in the input box and click the button.</p>";
      echo "<a href='index.php' class='back-button'>Back to Main Page</a>";
    }
    ?>
  </body>
</html>