<html>
  <head>
    <title>PHP Array</title>
    <style>
      body {
        background-color: whitesmoke;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;        
      }
      h1 {
        color: midnightblue;
        text-align: center;        
      }
      p {
        color: midnightblue;
        font-weight: bold;
        text-align: center;         
      }
      .container {
        width: 80%;
        margin: 10px auto;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 15px darkgray;
      }
      .item {      
        width: 10%;
        margin: 1px auto;
        padding: 10px;
        background-color: whitesmoke;
        border-radius: 10px;
        border: 1px solid darkgray;
        color: red;
        font-weight: bold;
        text-align: center;
        box-shadow: 0px 0px 5px darkgray;
        text-shadow: 1px 1px 1px black;
        transition: background-color 0.3s, transform 0.3s, font-size 0.3s;
      }
      .item:hover {
        background-color: lightgray;
        cursor: pointer;
        transform: scale(1.05);
        font-size: 1.1em;
      }
    </style>
  </head>
  <body>
    <div class="container"> 
      <?php echo "<h1>Phone Number Generator</h1>"; 
      echo "<p>By Ben Mickens</p>"; 
       $numbers = array(); 
      for ($i = 0; $i <= 6; $i++){
        $numbers[$i] = rand(1,9);
      }
     foreach($numbers as $number) { 
        echo "<div class='item'>$number</div><br>"; 
      }
      ?> 
    </div>
</html>