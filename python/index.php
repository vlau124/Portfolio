<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Python Samples</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <style>
  body {
    background: linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5), rgba(243,208,80,0.5), rgba(78,111,157,0.5));
    background-attachment: fixed;
  }
  </style>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>

<div class="info-container">
  <h1 class="info-title">Python Samples</h1>
  <p class="info-p">Here are some Python samples</p>
</div><!-- end of info container -->


  <table>
  <!--
    <tr>
      <th><a href="01/">01</a></th>
      <th><a href="01/">Interpreter</a></th>
      <td><a href="01/">
      Write a program that prints out the address of a restaurant you dislike.
      </a></td>
    </tr>
    
    <tr>
      <th><a href="02/">02</a></th>
      <th><a href="02/">Types</a></th>
      <td><a href="02/">
      Every state in the U.S. has two senators, but Florida has 20 million people to Idaho's 1.6 million. Write a program that shows how many Floridians it takes to equal the Senatorial power of one Idahoan.
      </a></td>
    </tr>
    
    <tr>
      <th><a href="03/">03</a></th>
      <th><a href="03/">Math</a></th>
      <th><a href="03/">
      Wisconsin has eight congressional districts covering its land area of 169,790 square kilometers, while Alaska has just one district for its 1,717,856 square kilometers. Write a program which determines how many times bigger than the average Wisconsin district that Alaskan district is.
      </a></th>
    </tr>
    -->
    
    <tr>
      <th><a href="04/">04</a></th>
      <th><a href="04/">Containers I</a></th>
      <th><a href="04/">
      Write a program that prints out its own command line arguments in reverse order from last to first.
      </a></th>
    </tr>
    
    <tr>
      <th><a href="05/">05</a></th>
      <th><a href="05/">Containers II</a></th>
      <th><a href="05/">
      Write a program that prints out the unique command line arguments it receives, in alphabetical order.
      </a></th>
    </tr>
    
    <tr>
      <th><a href="06/">06</a></th>
      <th><a href="06/">Flow</a></th>
      <th><a href="06/">
      Extend last week's program so that it also reports the number of times each argument occurred.
      </a></th>
    </tr>
    
    <tr>
      <th><a href="07/">07</a></th>
      <th><a href="07/">Functions</a></th>
      <th><a href="07/">
      	Write a program that responds to a positive integer passed on the command line with the number of bits needed to express that number in binary. The number can be calculated either with a logarithm or by producing a binary representation and measuring its length.
      </a></th>
    </tr>
    
    <tr>
      <th><a href="08/">08</a></th>
      <th><a href="08/">Object Orientation</a></th>
      <th><a href="08/">
      Write a class inheriting from int which has a method returning the number of bits needed to express the number in binary.
      </a></th>
    </tr>
    
    <tr>
      <th><a href="09/">09</a></th>
      <th><a href="09/">Exceptions</a></th>
      <th><a href="09/">
      	Extend last week's program so that it can be run from the command line with any number of integer arguments. Ensure that the class is still safe to import and that it handles any exceptions resulting from faulty user input.
      </a></th>
    </tr>
    
    <tr>
      <th><a href="10/">10</a></th>
      <th><a href="10/">Files</a></th>
      <th><a href="10/">
      Write a program that shows all words in the dictionary /users/abrick/resources/english that start with the first command line argument (the stem).
      </a></th>
    </tr>
    
    <tr>
      <th><a href="11/">11</a></th>
      <th><a href="11/">Web service</a></th>
      <th><a href="11/">
      	Write a CGI program which serves up all the words from the dictionary which start with a given stem. Expect the stem to be passed as an HTTP parameter called stem.
      </a></th>
    </tr>
    
    <tr>
      <th><a href="12/">12</a></th>
      <th><a href="12/">Web client</a></th>
      <th><a href="12/">
      	Write a client program for the stem CGI services which expects two command line arguments, a stem and a program URL without stem. The program should make the query and output the response, functioning similarly to the standalone program.
      </a></th>
    </tr>

    <tr>
      <th><a href="13/">13</a></th>
      <th><a href="13/">Regular expressions I</a></th>
      <th><a href="13/">
      The letters A through F are used for writing hexadecimal numbers, and can also spell a few English words. Write a program that finds the longest word in the dictionary /users/abrick/resources/english that is spelled using only those six letters.
      </a></th>
    </tr>
    
    <tr>
      <th><a href="14/">14</a></th>
      <th><a href="14/">Regular Expressions II </a></th>
      <th><a href="14/">
      Write a program that picks words from the dictionary which would be appropriate for the game of hangman. Explain in comments why you have chosen the rules you did.
      </a></th>
    </tr>
    
  </table>



<!-- must be loaded after -->
<script src="http://www.vluxcreations.com/js/accordion.js"></script>


<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>

</body>
</html>