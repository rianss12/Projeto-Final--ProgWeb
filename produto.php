<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM books");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>id</td>
		<td>Alvos</td>
		
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["alvo"]; ?></td>
		

		
		
		<td> <a href = "updatealvo2.php"> <input type = "button" value = "update" class = "Enviar"/></a><br><br></td>
		<td><a href = "deleteproduto.php"> <input type = "button" value = "delete" class  = "Enviar"/></a><br><br></td>
      </tr>
	  
			<?php
			$i++;
			}
			?>
</table>
<form method = "POST" action = "Inserir_Alvo.html">
	
	<a href = "Inserir_Alvo.html"> <input type = "button" value = "inserir alvo" class  = "Enviar"/></a>
</form>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>


       