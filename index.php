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

$operation = $_GET['operation'];
switch ($operation) {
    case "view":
        $sql = "select * from shop where status=0";
        $data = array();
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data = array(

            );
        }
        echo json_encode($data);
        break;

    case "insert":
        $item = $_GET['item'];
        $status = $_GET['status'];
        break;
    case "getById":
        $id = $_GET['id'];
        $sql_byId = "SELECT * FROM shop WHERE id=$id";
        $result = mysqli_query($conn, $sql_byId);
        $data = array();
        $data = mysqli_fetch_assoc($result);
        echo json_encode(array('detail' => $data), JSON_FORCE_OBJECT);
        break;
    case "update":
        $status = $_GET['status'];
        $id = $_GET['id'];
        $sql_update = "UPDATE shop SET status='$status' WHERE id=$id";
        if (mysqli_query($conn, $sql_update)) {
            echo 'Update thành công';
        } else {
            echo 'Update không thành công';
        }
        break;
    case "delete":
        $id = $_GET['id'];
        $sql_delete = "DELETE FROM shop WHERE id=$id";
        if (mysqli_query($conn, $sql_update)) {
            echo 'Xóa thành công';
        } else {
            echo 'Xóa thất bại';
        }
        break;
    case "viewBycate":
        $cat_id = $_GET['catid'];
        $sql_cat = "SELECT * FROM shop WHERE status=0 AND cate_id=$cat_id";
        $data = array();
        $result = mysqli_query($conn, $sql_cat);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
        break;
    default:
        break;
}