<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM alvos");
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
		<td>Alvo</td>
		
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["Alvo"]; ?></td>
		
		
		<td><a href="atualizaalvos.php?id=<?php echo ($row["id"]); ?>">Update</a></td>
		<td><a href="deletealvo.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
		
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>