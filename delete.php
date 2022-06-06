<?php
include_once 'koneksi.php';
/**
 * @var $connection PDO
 */

if ($_POST){
    $isbn  = $_POST['isbn'];
    $delete = "DELETE FROM buku WHERE isbn=$isbn";
    $result = $connection -> prepare($delete);
    $result->execute();

    $response['Response']='Succcess';
    $response['Message']='Berhasil menghapus data';
}
else {
    $response['Response']='Failed';
    $response['Message']='Gagal menghapus data';
}

header('Content-Type: application/json');
echo json_encode($response,JSON_PRETTY_PRINT);