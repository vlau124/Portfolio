<html>
<head></head>

<body>

<table>
  <h3>Current Visitors</h3>
	<tr><td>Visitor</td><td>Patient</td><td>Time</td></tr>
	<?php 

		foreach ($Filess as $title => $Files)
		{
			echo '<tr>
      <td>
        <a href="index.php?Files='.$Files->title.'">'.$Files->title.'</a>
      </td>
      <td>'.$Files->author.'</td>
      <td>'.$Files->description.'</td>
      </tr>';
		}

	?>
</table>

</body>
</html>