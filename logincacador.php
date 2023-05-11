<?php
    include_once 'database.php';
    echo $cacador;
    echo $senha;

    
    $sql = "select count(*) as total from listahunter where hunter= '$cacador'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    if($row['total']==1){
    
    header('Location:Inserir_Alvo.html' );
    exit;
    }

    

        

?>