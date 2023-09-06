<?php
include 'database.php';
$mydb = new Database('assignment');
$id = $_GET['id'];
print $mydb->delete($id);
?>

