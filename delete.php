<!-- answer bouns 3  -->
<?php
include_once("config.php");
$id = $_GET['id']; 
$result = mysqli_query($mysqli, "DELETE FROM employee WHERE id=$id");
header("Location:employeecrud.php");
?>