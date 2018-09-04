<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

//-------------expanded hints
$a[] = "Jackie";
$a[] = "Bob";
$a[] = "Rose";
$a[] = "Scarlet";
$a[] = "Ben";
$a[] = "Adam";
$a[] = "Johnny";
$a[] = "Lisa";
$a[] = "Leona";
$a[] = "Cathy";
$a[] = "Kim";
$a[] = "Henry";
$a[] = "Tom";
$a[] = "Timmy";
$a[] = "Timothy";
$a[] = "Philip";
$a[] = "Louis";
$a[] = "Carmen";
$a[] = "Eric";
$a[] = "Nathan";
$a[] = "Linus";
$a[] = "Mark";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>