<?php
include 'database.php';
$mydata = new Database('assignment');
$id = $_GET['id'];
if (isset($_POST['Name'])) {
    $name = $_POST['Name'];
    $espb = $_POST['ESPB'];
    $description = $_POST['Description'];

    // require 'image_processing.php';

    print $mydata->update($id, $name, $description, $espb);

    #print($uploadOk);
}
?>
