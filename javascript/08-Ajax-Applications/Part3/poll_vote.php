<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$select0 = $array[0];
$select1 = $array[1];
$select2 = $array[2];
$totalselect = 0;

if ($vote == 0) {
  $select0++;
}
if ($vote == 1) {
  $select1++;
}
if ($vote == 2) {
  $select2++;
}

$totalselect = $select0 + $select1 + $select2;

//insert votes to txt file
$insertvote = $select0."||".$select1."||".$select2;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>

<tr>
<td>Star Wars:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($select0/($totalselect),2)); ?>'
height='20'>
<?php echo(100*round($select0/($totalselect),2)); ?>%
<?php echo $select0 . " Votes"; ?>
</td>
</tr>

<tr>
<td>Avengers:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($select1/($totalselect),2)); ?>'
height='20'>
<?php echo(100*round($select1/($totalselect),2)); ?>%
<?php echo $select1 . " Votes"; ?>
</td>
</tr>

<tr>
<td>Justice League:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($select2/($totalselect),2)); ?>'
height='20'>
<?php echo(100*round($select2/($totalselect),2)); ?>%
<?php echo $select2 . " Votes"; ?>
</td>
</tr>

</table>