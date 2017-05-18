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

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    echo "không kết nối CSDL" . mysqli_connect_error();
}

$operasi = $_GET['operasi'];
switch ($operasi) {
    case "view":
        $sql = "select * from shop where status=0";
        $data = array();
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
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