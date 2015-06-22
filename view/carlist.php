<html>
<head></head>

<body>

<table>
	<tr><td>Make</td><td>Model</td><td>Color</td></tr>
	<?php 

		foreach ($cars as $name => $car)
		{
			echo '<tr><td><a href="index.php?car='.$car->make.'">'.$car->make.'</a></td><td>'.$car->model.'</td><td>'.$car->color.'</td></tr>';
		}

	?>
</table>

</body>
</html>