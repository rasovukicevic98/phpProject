<?php
include 'database.php';
$mydb = new Database('assignment');
if (isset($_POST['add']) && ($_POST['add'] = 'Add Subject')) {
    #print_r($_FILES);

    // require 'image_processing_post.php';

    $niz = [
        'Name' => "'" . $_POST['Name'] . "'",
        'ESPB' => "'" . $_POST['ESPB'] . "'",
        'Description' => "'" . $_POST['Description'] . "'",
    ];

    if ($mydb->insert('subjects', 'Name, ESPB, Description', $niz)) {
        echo "<script>alert('Subject added!')</script>";
    } else {
        echo "<script>alert('Subject was not added successfully!')</script>";
    }
}

?>
