<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
echo "<tr><td>{$row[0]}</td>
    <td>{$row['ap_persona']}</td>
    <td>{$row['am_persona']}</td>
    <td>{$row['nombre_per']}</td>
    <td>{$row['no_cedula']}</td>
    <td>{$row['direccion']}</td>
    <td>{$row['ciudad']}</td>
    <td>{$row['telefono']}</td>
    <td>{$row['email']}</td>
    <td>{$row['especialidad']}</td>
    <td>{$row['ano_titulacion']}</td>
    <td>{$row['especialidad']}</td>
    <td>{$row['codigo_minsa']}</td>
    <td>{$row['ano_estudio']}</td>
    <td>{$row['estado']}</td>
    <td>{$row['id_congreso']}</td>
    <td>{$row['id_medico']}</td>
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_persona']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_persona']}' href='#!'></a></td></tr>";

?>
