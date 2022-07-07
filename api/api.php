<?php

header('content-type: application/json');
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Methods, Authorization");

$request = $_SERVER['REQUEST_METHOD'];

switch ($request) {
   case 'GET':
      getmethod();
      break;

   case 'POST':
      // postmethod();
      break;

   default:
      echo '{"name": "data not found"}';
      break;
}
function getmethod()
{
   include "../koneksi.php";
   $sql = "SELECT * FROM table_gunung";
   $res = mysqli_query($conn, $sql);

   $check = mysqli_fetch_all($res, MYSQLI_ASSOC);
   echo json_encode($check);
}