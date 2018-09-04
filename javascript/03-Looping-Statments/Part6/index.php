<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Looping Statements [Part 6]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <!-- ////////////////////////////////added on//////////////////////////////// -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style> 
  body{
      background-color: powderblue;
  }
  </style>
  
  <script> 
  $(document).ready(function(){
      $("button").click(function(){
          //$("div").animate({left: '250px'});          
          $(".santa").animate({top: '0px'});
          for (x =0; x <=1000; x++)
          {
          y = Math.floor((Math.random() * 700) + 1);
          z = Math.floor((Math.random() * 1000) + 1);
          $(".santa").animate({top: y +'px'});
          $(".santa").animate({left: z +'px'});
          //$("div").animate({top: '700px'});
          //$("div").animate({top: '100px'});
          $('#stopme').text("Try and Stop me! BWUAHAHAHAHAHA!");
          $('#12title').text("Try and Stop me! BWUAHAHAHAHAHA! SANTA IS ON THE LOOSE!");
          }
      });
  });
</script> 

</head>


<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

<h1>Looping Statements [Part 6]</h1>

<p>
Uses reptition and switch statements to print the song "The Twelve Days of Christmas".
</p>

<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>

<br>
        
        <div class="santa" style="background:#98bf21;height:100px;width:120px;position:absolute;">
        <img src = "santa.gif" alt="santa">
        <p id="stopme" style="font-size: 25px;">
        </p>
        </div>
        <br><br><br><br><br><br><br>
        <button>Start Animation</button>
        
        
        
        
<p id="text1"></p>

<h2 id="12title">12 Days of Christmas</h2>

<div id="song">
</div>

<script>
var verse1;
var verse2;
var lyrics = "";
var verseadd = "<p>A Patridge in a Pear Tree</p>";

for (x = 1; x <= 12; x++)
{
  lines(x);

  lyrics += verse1;
  for(y = x; y > 0; y--)
  {
    lines(y);
    
    //adding exception for first verse to fix it
    if ( x == 1)
    {
    verse2 = verseadd;
    }
    
    lyrics += verse2;
  }
  lyrics += "<br>";
}
document.getElementById("song").innerHTML += lyrics;


// verse1 has been fixed with the correct days
function lines(x)
{
  switch (x)
  {
    case 1:
      verse1 = '<p>On the first day of Christmas my true love sent to me:</p>';
      verse2 = '<p>and a Patridge in a Pear Tree</p>';
      break; 
    case 2:
      verse1 = '<p>On the second day of Christmas my true love sent to me:</p>';
      verse2 = '<p>Two Turtle Doves</p>';
      break; 
    case 3:
      verse1 = '<p>On the third day of Christmas my true love sent to me:</p>';
      verse2 = '<p>Three French Hens</p>';
      break;
    case 4:
      verse1 = '<p>On the fourth day of Christmas my true love sent to me:</p>';
      verse2 = '<p>Four Calling Birds</p>';
      break;
    case 5:
      verse1 = '<p>On the fifth day of Christmas my true love sent to me:</p>';
      verse2 = '<p>Five Golden Rings</p>';
      break;
    case 6:
      verse1 = '<p>On the sixth day of Christmas my true love sent to me:</p>';
      verse2 = '<p>Six Geese a Laying</p>';
      break;
    case 7:
      verse1 = '<p>On the seventh day of Christmas my true love sent to me:</p>';
      verse2 = '<p>Seven Swans a Swimming</p>';
      break;
    case 8:
      verse1 = '<p>On the eighth day of Christmas my true love sent to me:</p>';
      verse2 = '<p>Eight Maids a Milking</p>';
      break;
    case 9:
      verse1 = '<p>On the ninth day of Christmas my true love sent to me:</p>';
      verse2 = '<p>Nine Ladies Dancing</p>';
      break;
    case 10:
      verse1 = '<p>On the tenth day of Christmas my true love sent to me:</p>';
      verse2 = '<p>Ten Lords a Leaping</p>';
      break;
    case 11:
      verse1 = '<p>On the eleventh day of Christmas my true love sent to me:</p>';
      verse2 = '<p>Eleven Pipers Piping</p>';
      break;
    case 12:
      verse1 = '<p>On the twelveth day of Christmas my true love sent to me:</p>';
      verse2 = '<p>12 Drummers Drumming</p>';
      break;
  default:
  valInput = false;
  }    
}
</script>



        
<script>
    function drawPie (id, size, percent, color) {                               
        var sizeString = "" + size + "px";                      
        var grad = 360/100*percent+90;      
        console.log(grad);
        var pie = $("<span></span>");

        pie.css({"width": sizeString, 
            "height": sizeString,               
            "display": "block",
            "border-radius": "50%",
            "background-color": color,                          
            "float": "left",
            "margin": "5px"             
        });         

        if(percent <= 50){
            pie.css({"background-image": "linear-gradient("+ grad + "deg, transparent 50%, white 50%), linear-gradient(90deg, white 50%, transparent 50%)"});
        } else if (percent >= 100) {
            pie.css({"background-image": "none"});
        } else {                                
            pie.css({"background-image": "linear-gradient("+ (grad+180) + "deg, transparent 50%, "+color+" 50%), linear-gradient(+90deg, white 50%, transparent 50%)"});                
        }

        $(id).append(pie);
    }
</script>

















<!-- easier for me to premade text than injecting with nothing-->
<!-- mostly used for testing purposes -->

<p id="text2"></p>
<p id="text3"></p>
<p id="text4"></p>

<p id="check1"></p>
<p id="check2"></p>
<p id="check3"></p>
<p id="check4"></p>
<p id="check5"></p>
<p id="check6"></p>





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