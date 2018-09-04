<html>
<head></head>

<body>

<table>
	<tr><td>Files Name</td><td>Files Path</td><td>Description</td></tr>
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