<?php
include_once('koneksi.php');
/**
 * @var $connection PDO
 */

if ($_POST){
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $abstrak = $_POST['abstrak'];

    $update = "UPDATE buku SET `isbn`='$isbn',`judul`='$judul',`pengarang`='$pengarang',`jumlah`='$jumlah',`tanggal`='$tanggal',`abstrak`='$abstrak' WHERE `isbn` = $isbn";
    $result = $connection -> prepare($update);
    $result->execute();

    $response['Response']='Succcess';
    $response['Message']='Berhasil mengupdate data';
}
else {
    $response['Response']='Failed';
    $response['Message']='Gagal mengupdate data';
}

header('Content-Type: application/json');
echo json_encode($response,JSON_PRETTY_PRINT);