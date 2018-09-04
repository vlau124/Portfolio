<!DOCTYPE html>
<html lang="en">
<head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Functions [Part 1]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <script> 
  $(document).ready(function(){
      $("#flip").click(function(){
          $("#panel").slideToggle("slow");
      });
  });
  </script>
  
  <style> 
  #panel, #flip {
      padding: 5px;
      text-align: center;
      color: #FFFFFF;
      background-color: #000000;
      border: solid 1px #c3c3c3;
      opacity:0.7;
  }

  #panel {
      padding: 10px;
      display: none;
  }
  </style>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

  <h1>Functions [Part 1]</h1>

  <p>Calculate a students grades, and checks for valid input. Integerse must be between 1-100.
  </p>
  <p>
  Grade formula:<br>
  final average = (.5 * hwAvg) + (.2 * midExam) + (.2 * finalExam) + (.1 * ACR)
  </p>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>

<br><br>
  <div id="flip">Click to Show/Hide Instructions</div>
  <div id="panel">Input the scores in each section. Then click submit.<br>
  Leaving Boxes Blank will count as 0<br>
  Click Reset to start over.
  </div>

  <h2>Student Grades</h2>

  <!-- Form Input -->
  <form name="myform">
    Homework<br>
    <input type="text" name="Homework" size="10" placeholder="Homework"><br>
    Midterm Exam<br>
    <input type="text" name="Midterm" size="10" placeholder="Midterm"><br>
    Final Score<br>
    <input type="text" name="Final" size="10" placeholder="Final"><br>
    ACR Score<br>
    <input type="text" name="ACR" size="10" placeholder="ACR"><br>

    <input type="button" onclick="process()" value="SUBMIT">
    <input type="reset" onclick="location.reload();" value="RESET">
  </form>

  <!-- Rubric
  90-100	A
  80-89	B
  70-79	C
  60-69	D
  0-59
  -->
  <script>
  function process()
  {
    var final_average, hwAvg, midExam, finalExam, ACR,LetterScore;
    
    //initializing variables
    hwAvg = parseInt(document.forms["myform"].elements["Homework"].value);
    midExam = parseInt(document.forms["myform"].elements["Midterm"].value);
    finalExam = parseInt(document.forms["myform"].elements["Final"].value);
    ACR = parseInt(document.forms["myform"].elements["ACR"].value);
    final_average = 0;
    LetterScore = 0;
    
    //If someone doesnt enter a number. Produce a warning statement
    if (isNaN(hwAvg) || isNaN(midExam) || isNaN(finalExam) || isNaN(ACR))
    {
    document.getElementById("text4").innerHTML = "<h2>PLEASE ENTER A VALID INPUT!</h2>";
    } else {
    document.getElementById("text4").innerHTML = "<p></p>";
    }

    final_average = (.5 * hwAvg) + (.2 * midExam) + (.2 * finalExam) + (.1 * ACR);
    
    //Calculating Letter Grade
    if(final_average > 100){ LetterScore = "This person cheated!"; }
    if(final_average >= 90 && final_average <= 100){ LetterScore = "A"; }
    if(final_average >= 80 && final_average <= 89){ LetterScore = "B"; }
    if(final_average >= 70 && final_average <= 79){ LetterScore = "C"; }
    if(final_average >= 60 && final_average <= 69){ LetterScore = "D"; }
    if(final_average <= 59){ LetterScore = "F"; }
    
    document.getElementById("text1").innerHTML = "<p>Student's Final Average: " + Math.round(final_average) + "</p>";
    document.getElementById("text2").innerHTML = "<p>Letter Grade: " + LetterScore + "</p>";
    
    //Does the student need to retake the class?
    if(LetterScore == "D" || LetterScore == "F")
    {
    document.getElementById("text3").innerHTML = "<p>Student must retake the course</p>";
    }
    
  }
  </script>

  <p id="text1"></p>
  <p id="text2"></p>
  <p id="text3"></p>
  <p id="text4"></p>

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