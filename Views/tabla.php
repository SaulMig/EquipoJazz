<?php
$datos = $datos[0];
while($row = mysqli_fetch_array($datos))
	echo "
		<tr>
			<td>row{'desc_precongreso'}</td>
			<td><input type='checkbox'></td>
		</tr>
	"
?>