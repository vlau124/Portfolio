<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Arrays [Part 3]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <!-- ////////////////////////////////Self Note//////////////////////////////// -->  
  <!-- jump to block has been deleted it was causing issues with the jquery drag addon -->
  <!-- ////////////////////////////////Self Note//////////////////////////////// -->

  <!-- ////////////////////////////////added on//////////////////////////////// -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>


<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

  <h1>Arrays [Part 3]</h1>

  <p>
  Using a 1 dimensional array. Counts the number of salespeople that earn salaries in each of the following category:
  <br><br>
  a) $200.00 - 299.99<br>
  b) $300.00 - 399.99<br>
  c) $400.00 - 499.99<br>
  d) $500.00 - 599.99<br>
  e) $600.00 - 699.99<br>
  f) $700.00 - 799.99<br>
  g) $800.00 - 899.99<br>
  h) $900.00 - 999.99<br>
  i) $1000 and over <br>
  <br><br>
  A company pays its salespeople on a commission basis. The salespeople receive $200.00 per week plus 9% of their gross sales for that week. For example, a sales person who grosses $5000.00 in sales in a week receives $200.00 plus 9% of $5000.00, or a total of $650.00.
  <br><br>

  </p>
  
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>

  <!-- Part 1a -->
  <h2>Employee Performance Index</h2>

  <p>
  Find out how well your employees are doing
  </p>
  
  <form id="Form1">
  <b>Enter Gross sales for Employee</b><br>
  This will calculate automatically $200 + (0.09 * gross sales) for the week<br>
  <input type="number" placeholder="1234" name="input1" class="required"><br>
  <input type="button" value="Submit" onclick="process1()" style="width: 100px; height:30px; font-size:20px;">
  </form>
  
  <p id="entered"></p>

  <script>
  var earn_num = [];

  for (x = 0; x < 9; x++)
  {
    earn_num[x] = 0;
  }

  function process1()
  {
    var gross_sales = parseInt(document.getElementById("Form1").elements.namedItem("input1").value);
    var earnings = 200 + (gross_sales * 0.09);
    
    html = "";
    html += "<b>Gross Sales Entered: </b>$"+ gross_sales + "<b> Earnings: </b>$" + earnings;
    document.getElementById("entered").innerHTML = html;
    
    //condensing everything
    if (earnings < 200)
    {
      document.getElementById("text1").innerHTML = "<b>This employee does not meet the quota! Fire Him!</b>";
    }
    if (earnings >= 200 && earnings < 300){ earn_num[0]++; }
    if (earnings >= 300 && earnings < 400){ earn_num[1]++; }
    if (earnings >= 400 && earnings < 500){ earn_num[2]++; }
    if (earnings >= 500 && earnings < 600){ earn_num[3]++; }
    if (earnings >= 600 && earnings < 700){ earn_num[4]++; }
    if (earnings >= 700 && earnings < 800){ earn_num[5]++; }
    if (earnings >= 800 && earnings < 900){ earn_num[6]++; }
    if (earnings >= 900 && earnings < 1000){ earn_num[7]++; }
    if (earnings >= 1000)
    {
    earn_num[8]++;
    document.getElementById("text1").innerHTML = "<b>Give this guy a 1 week paid vacation before he quits his job!</b>";
    }
   
    for (x =0; x<9; x++)
    {
    document.getElementById("p" + x).innerHTML = earn_num[x];
    }
  }
  </script>



  <p id="text1"></p>
  <p id="text2"></p>

    Number of people who earned the following amount:
  <table border="1" id="table1">
    <tbody>
    
      <tr>
        <td>Earnings</td>
        <td># of People</td>
      </tr>
        
      <tr>
        <td>a) $200.00 - 299.99</td>
        <td id="p0">0</td>
      </tr>
      
      <tr>
        <td>b) $300.00 - 399.99</td>
        <td id="p1">0</td>
      </tr>
      
      <tr>
        <td>c) $400.00 - 499.99</td>
        <td id="p2">0</td>
      </tr>
      
      <tr>
        <td>d) $500.00 - 599.99</td>
        <td id="p3">0</td>
      </tr>
      
      <tr>
        <td>e) $600.00 - 699.99</td>
        <td id="p4">0</td>
      </tr>
      
      <tr>
        <td>f) $700.00 - 799.99</td>
        <td id="p5">0</td>
      </tr>
      
      <tr>
        <td>g) $800.00 - 899.99</td>
        <td id="p6">0</td>
      </tr>
      
      <tr>
        <td>h) $900.00 - 999.99</td>
        <td id="p7">0</td>
      </tr>
      
      <tr>
        <td>i) $1000 and over </td>
        <td id="p8">0</td>
      </tr>

    </tbody>
  </table>

    <h2 id="h2"></h2>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>