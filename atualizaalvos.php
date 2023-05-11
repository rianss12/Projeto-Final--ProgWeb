
<html>
<head>
<title>Atualizar Alvos</title>
</head>
<body>
<form name="frmUser" method="post" action="atualizaalvos2.php">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
ID Alvo: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo isset($row['id']); ?>">
<input type="number" name="id"  value="<?php echo isset($row['id']); ?>">


<br>
Alvo: <br>
<input type="text" name="Alvo" class="txtField" value="<?php echo isset($row['Alvo']); ?>">
<br><br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>