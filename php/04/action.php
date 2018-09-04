<html>
<head>
<title>Assignment 5 - PHP and Web Forms</title>
<?php include $_SERVER['DOCUMENT_ROOT'].'/test/php/header.php'; ?>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/test/php/navigation.php'; ?>
<div class="info-container">



<h1>Assignment 5 - PHP and Web Forms</h1>
<h2>Called Action Page</h2>

<!--The second page should calculate the monthly 
payment according to the following formula:
-->

<?php 
//Second page

$payment = 0;
$loanAmount = $_REQUEST['Loan'];
$rate = $_REQUEST['Rate'] * 0.01; //converting the rate to decimal
$months = $_REQUEST['Months'];

$interest = $_REQUEST['Rate'];

//I am spacing it this way because i have trouble reading the ()
$payment = $loanAmount * ($rate/12) *
           (
              pow( (1+($rate/12)),$months ) 
              /
              ( pow( (1+($rate/12)) ,$months) -1)
           );

           
print "<p>Loan Amount: $loanAmount </p>";    
print "<p>Interest Rate: $interest %</p>";
print "<p>Months: $months </p>";

print "<br>";
printf('Your monthly Payment is %.2f ', $payment);

?>


</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/test/php/footer.php'; ?>
</body>
</html>