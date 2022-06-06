<?php
include_once 'koneksi.php';
/**
 * @var $connection PDO
 */

//mempersiapkan query
$statement = $connection->query("select * from buku");

//Menentukan hasil query berupa ARRAY
$statement->setFetchMode(PDO::FETCH_ASSOC);

//Eksekusi query
$results = $statement->fetchAll();

//output JSON
header('Content-Type: application/json');
echo json_encode($results);


