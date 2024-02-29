<?php

    require_once('connection.php');
    parse_str(file_get_contents('php://input'), $value);

    $id = $value['id'];

    $query = "DELETE FROM desa WHERE id = '$id' ";
    $sql   = mysqli_query($db_connect, $query);

    if ($sql) {
        echo json_encode ( array('message' => 'Data berhasil dihapus') );
    } else {
        echo json_encode ( array('message' => 'Error! Data gagal dihapus') );
    }

?>