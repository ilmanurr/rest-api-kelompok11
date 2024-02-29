<?php 

    require_once('connection.php');


    $desa = $_POST['desa'];

    $query = "INSERT INTO desa(desa) VALUES ('$desa')";
    $sql = mysqli_query($db_connect, $query);


    if ($sql) {
        echo json_encode ( array( 'message' => 'Data berhasil dibuat!') );
    } else {
        echo json_encode ( array('message' => 'Error! Data gagal dibuat') );
    }

?>