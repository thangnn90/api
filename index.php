<?php
/**
 * Created by PhpStorm.
 * User: nguye
 * Date: 17/05/2017
 * Time: 16:10
 */


$server = "localhost";
$username = "root";
$password = "";
$database = "shop";

$conn = mysqli_connect($server, $username, $password) or die("<h1>Koneksi Mysql Error : </h1>" . mysqli_connect_error());

@$operasi = $_GET['operasi'];

switch ($operasi) {
    case "view":
        $sql_fillall = mysqli_query($conn, "SELECT * FROM shop WHERE status=0");
        $data_array = array();
        while (mysqli_num_rows($sql_fillall) > 0) {
            $data_array[] = $row;
        }
        echo json_encode($data_array);
        printf(json_encode($data_array));
        break;
    case "insert":
        break;
    case "getById":
        break;
    case "update":
        break;
    case "delete":
        break;
    default:
        break;
}