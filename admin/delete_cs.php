<?php

// include database connection file
require 'config.php';

// Get id from URL to delete that user
$id_cs = $_GET['id_cs'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM cs WHERE id_cs = $id_cs");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index_cs.php");

?>











