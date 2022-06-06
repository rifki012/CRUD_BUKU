<?php
require_once('koneksi.php');
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

    $input = "INSERT INTO buku (`isbn`, `judul`, `pengarang`, `jumlah`, `tanggal`, `abstrak`) VALUES ('$isbn','$judul','$pengarang','$jumlah','$tanggal','$abstrak')";
    $result = $connection -> prepare($input);
    $result->execute();

    $response['Response']='Succcess';
    $response['Message']='Berhasil menginput data buku';
}
else {
    $response['Response']='Failed';
    $response['Message']='Gagal menginput data buku';
}

header('Content-Type: application/json');
echo json_encode($response,JSON_PRETTY_PRINT);