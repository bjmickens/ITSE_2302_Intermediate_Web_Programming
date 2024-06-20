<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab 1 - PHP and Review</title>
    <style>
      body {
        background: #E0F7FA;          
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      }
      h1 {
        color: #00796B;
      }
      table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
      }
      th, td {
        border: 1px solid #004D40;
        padding: 10px;
        text-align: left;
      }
      th {
        background-color: #00796B;
        color: white;
      }
      td {
        background-color: #B2DFDB;
      }
      p {
        color: #004D40; 
        border: 2px solid #004D40;
        width: 80%;
        padding: 10px;
        margin: 10px auto;
        text-align: center;
      }
      form {
        margin: 20px 0;
      }
      label, input, button {      
        margin-bottom: 10px;
      }
      button {
        background-color: #00796B;
        color: white;
        padding: 10px 20px;        
      }
      button:hover {
        background-color: #004D40;
        cursor: pointer;      
      }
    </style>
  </head>
  <body>
    <h1>Proposed Class Schedule</h1>
    <p>A.A.S. in Computer Programming at San Antonio College</p>
    <br>
    <table>
      <tr>
        <th>Summer '24</th>
        <th>Fall '24</th>
        <th>Spring '25</th>
        <th>Summer '25</th>
        <th>Fall '25</th>
      </tr>
      <tr>
        <td><a href="https://alamo.simplesyllabus.com/en-US/doc/8euqmy3ph/Summer-2024-Summer-II-8-Week-ITSE-2302-SAC-001-?mode=view">ITSE 2302</a></td>
        <td><a href="https://alamo.simplesyllabus.com/en-US/doc/ecfi7syyi/Spring-2024-Full-Term-INEW-2434-SAC-001-?mode=view">INEW 2434</a></td>
        <td><a href="https://alamo.simplesyllabus.com/en-US/doc/nbiwmcpum/Spring-2024-Full-Term-COSC-1437-SAC-002-?mode=view">COSC 1437</a></td>
        <td><a href="https://alamo.simplesyllabus.com/en-US/doc/6ox2uzx3r/Spring-2024-Full-Term-COSC-2325-NVC-004-?mode=view">COSC 2325</a></td>
        <td><a href="https://alamo.simplesyllabus.com/en-US/doc/l6u59ut9e/Spring-2024-Full-Term-COSC-2336-PAC-002-?mode=view">COSC 2336</a></td>
      </tr>
      <tr>
        <td><a href="https://alamo.simplesyllabus.com/en-US/doc/9rmfu2xyg/Summer-2024-Summer-10-Week-Session-MATH-1414-SAC-020-?mode=view">MATH 1414</a></td>
        <td><a href="https://alamo.simplesyllabus.com/en-US/doc/8ex3e6v62/Spring-2024-8-Weeks-Flex-I-MATH-2412-SAC-111-?mode=view">MATH 2412</a></td>
        <td><a href="https://alamo.simplesyllabus.com/en-US/doc/a90xjql5c/Spring-2024-Full-Term-MATH-2305-SAC-006-?mode=view">MATH 2305</a></td>
        <td></td>
        <td><a href="https://alamo.simplesyllabus.com/en-US/doc/x0vu76gwc/Spring-2024-Full-Term-INEW-2332-SAC-001-?mode=view">INEW 2332</a></td>
      </tr>
      <tr>
        <td></td>
        <td><a href="https://alamo.simplesyllabus.com/en-US/doc/4ms1rhaw3/Spring-2024-8-Weeks-Flex-II-MATH-2413-SAC-027-?mode=view">MATH 2413</a></td>
        <td><a href="https://alamo.simplesyllabus.com/en-US/doc/jrvmlxwcx/Spring-2024-Full-Term-INEW-2330-SAC-001-?mode=view">INEW 2330</a></td>
        <td></td>
        <td></td>
    </table>
    <form>
      <label for="name">Advisor:</label>
      <input type="text" id="name" name="name" /><br>
      <input type="radio" id="approved" name="approval" value="approved" />
      <label for="approved">Approved</label><br>
      <input type="radio" id="denied" name="approval" value="denied" />
      <label for="denied">Denied</label><br>
      <button type="button">Submit</button>
    </form>
    
    <?php echo '<p>Hello World</p>'; ?> 
  </body>
</html>