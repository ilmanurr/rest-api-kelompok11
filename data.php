<?php
require_once('connection.php');

$query = "SELECT * FROM desa ORDER BY id DESC";
$sql = mysqli_query($db_connect, $query);

if ($sql) {

    $result = array();
    while ($row = mysqli_fetch_array($sql)) {
        array_push( $result, array(
            'id' => $row['id'],
            'desa' => $row['desa'],
        ) );
    }

    echo json_encode ( array('desa' => $result));
}

?>