<?php
include_once 'database.php';
if(count($_POST)>0) {
    if( mysqli_query($conn,"UPDATE alvos set id='" . $_POST['id'] . "', Alvo='" . $_POST['Alvo'] .  "' WHERE id='" . ($_POST['id']) . "'") === true){
        echo "Alvo atualizado com sucesso ";
    } else{
        echo "ERROR: Could not able to execute $sql. " 
                                            . $mysqli->error;
    }
    $message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM alvos WHERE id='" . isset($_GET['id']) . "'");
$row= mysqli_fetch_array($result);

header('Location: salvaralvo.php')
 

 
?>