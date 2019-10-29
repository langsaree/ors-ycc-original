<title>delete process</title>
<?php
include('../config/db.php');
extract($_GET);
$id = $id;
$sql = "delete from lecture where lec_id='$id'";

// to porform query
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Error: ' . mysqli_error($conn));
} else
    $success = '<span style="color:red"> The system has successfully deleted the professor data </span>';
include('lec_view.php');

?>