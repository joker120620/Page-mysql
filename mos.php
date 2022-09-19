<?
include("con_db.php");
$result=mysql_query("SELECT * FROM usuarios ORDER BY nombre",
  $conexion);
echo"<table width=300>
<tr>
<td><b>Nombre</b></td><td><b>Apellido</b></td><td><b>DNI</b></td>
</tr>";
while($row=mysql_fetch_row($result)){
  echo"<tr>
    <td>$row[1]</td><td>$row[2]</td><td>$row[3]
      </td>
    </tr>";
}
echo"</table>";
?> 
