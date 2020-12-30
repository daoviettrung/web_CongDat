<?php
include '../connect.php';
session_start();
$_SESSION["notification"] = "Fields cannot be left blank";
$name = $_POST['name'];
if ($name != null) {
    $sql = "INSERT INTO tbl_species(name) VALUES('$name')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:http://localhost:8080/Asm_CongDat/admin/species/view.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

}
else{
    header("location:http://localhost:8080/Asm_CongDat/admin/species/add.php");
}
?>
