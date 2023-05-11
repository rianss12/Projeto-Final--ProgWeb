<?php

include_once 'database.php';


$hunter = mysqli_real_escape_string($conn, trim($_POST['hunter']));
$senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from listahunter where hunter = '$hunter'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
  echo "Ja existe um usuarios com esse nome";
  exit;
}

$result_usuario = "INSERT INTO listahunter(hunter, senha) VALUES ('$hunter', '$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if ($conn->query($sql) == TRUE) {
  echo "OK";
}
