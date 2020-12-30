<?php
include '../connect.php';
$id=$_GET['id'];
//echo "<br>";
$query = "DELETE FROM tbl_species WHERE id = '$id'";
$result = mysqli_query($conn, $query);
//$result = mysqli_query($conn, $sql);
if($result)
{
    header("location:http://localhost:8080/Asm_CongDat/admin/species/view.php");

}
else

{
    die("Connection failed: " . mysqli_connect_error());
}
?>