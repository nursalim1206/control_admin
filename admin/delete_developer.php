<?php

// include database connection file
require 'config.php';

// Get id from URL to delete that user
$id_developer = $_GET['id_developer'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM developer WHERE id_developer = $id_developer");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index_developer.php");

?>











