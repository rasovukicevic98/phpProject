<?php
include 'database.php';
$mydb = new Database('assignment');
$id = $_GET['id'];
$niz = [
    'Name' => "'" . $_POST['Name'] . "'",
    'Description' => "'" . $_POST['Description'] . "'",
    'subjectID' => "'" . $id . "'",
    'courseID' => "'" . 1 . "'",
];

if (
    $mydb->insertAssignment(
        'assignments',
        'Name, Description, subjectID, courseID',
        $niz
    )
) {
    echo "<script>alert('Assignment added!')</script>";
} else {
    echo "<script>alert('Assignment was not added successfully!' +  $string)</script>";
}

?>
