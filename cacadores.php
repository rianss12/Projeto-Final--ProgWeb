<?php 

include_once 'database.php';


$alvo = mysqli_real_escape_string($conn, trim($_POST['alvo']));


$sql = "select count(*) as total from Alvos where alvo = '$alvo'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if($row['total']==1){
    echo "we already have a book with this name";
    //header('Location:cadastro.html' );
    exit;
}

$result_usuario = "INSERT INTO Alvos(alvo) VALUES ('$alvo')";
$resultado_usuario = mysqli_query($conn,$result_usuario);

if($conn->query($sql)==TRUE) {
   header('Location: Inserir_Alvo.html');
}

$conn -> close();
//header('Location: pro')


?>