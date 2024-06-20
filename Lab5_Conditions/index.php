<html>
  <head>
    <title>Lab 5 - Conditions</title>
  </head>
  <style>
    body {
      background-color: #f0f0f0;
      font-family: 'Roboto', Arial, sans-serif;
      margin: 0;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    h1, h2 {
      color: #333;
    }
    ol {
      margin: 0 auto;
      padding: 0;      
      list-style-position: inside;
      text-align: left;
      max-width: 400px;
    }
    form {
      margin-top: 20px;
    }
    input[type="number"] {
      padding: 10px;
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      margin-bottom: 10px; 
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    input[type="submit"]:hover {
      background-color: #555;
    }
    
  </style>
  <body>
    <div class="container">
      <h1>Movie Quotes</h1>
      <h2>Programmer: Ben Mickens</h2>
      <p>Enter a number in the input box and click the button</p>
      <ol>
        <li>Gone with the Wind</li>
        <li>The Godfather</li>
        <li>Jaws</li>
        <li>Forrest Gump</li>
        <li>Star Wars</li>
      </ol>
      <form action="response.php" method="get">
        <input type="number" min="1" max="5" name="movie" required>
        <input type="submit" value="Get Quote">
      </form>     
    </div>  
  </body>
</html>