
<html>

<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id_developer = $_POST['id_developer'];
    $email_developer = $_POST['email_developer'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE developer SET id_developer='$id_developer',
	email_developer='$email_developer' WHERE 
    id_developer=$id_developer");

    // Redirect to homepage to display updated user in list
    header("Location: index_developer.php");
}
?>
<?php

$id_developer = $_GET['id_developer'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM developer WHERE id_developer=$id_developer");

while ($user_data = mysqli_fetch_array($result)) {
   $id_developer = $user_data['id_developer'];
    $email_developer = $user_data['email_developer'];
}
?>
<head>
    <title>Edit Customer service</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'     style="color: black;" >Edit customer service</h2>

    <div class="kotak">
        <form action="edit_developer.php" method="post" class="form_login">
            <input type="hidden" name="id_developer" class="form_login" value=<?php echo $id_developer; ?>>
            <label     style="color: black;" >email_developer</label>
            <input type="text" name="email_developer" class="form_login" value=<?php echo $email_developer; ?>>
            <input type="submit" name="update" class="submit" value="update">
        </form>
    </div>
</body>
</html>
