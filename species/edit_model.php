<?php
include '../connect.php';
$name = $_POST['name'];
$id = $_GET['id'];
$sql = "UPDATE tbl_species SET name='$name'WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("location:http://localhost:8080/Asm_CongDat/admin/species/view.php");

} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>
