
<html>

<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id_cs = $_POST['id_cs'];
    $email_cs = $_POST['email_cs'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE cs SET id_cs='$id_cs',
	email_cs='$email_cs' WHERE 
    id_cs=$id_cs");

    // Redirect to homepage to display updated user in list
    header("Location: index_cs.php");
}
?>
<?php

$id_cs = $_GET['id_cs'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM cs WHERE id_cs=$id_cs");

while ($user_data = mysqli_fetch_array($result)) {
   $id_cs = $user_data['id_cs'];
    $email_cs = $user_data['email_cs'];
}
?>
<head>
    <title     style="color: black;" >Edit Customer service</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'    style="color: black;" >Edit customer service</h2>

    <div class="kotak">
        <form action="edit_cs.php" method="post" class="form_login">
            <input type="hidden" name="id_cs" class="form_login" value=<?php echo $id_cs; ?>>
            <label     style="color: black;" >email_cs</label>
            <input type="text" name="email_cs" class="form_login" value=<?php echo $email_cs; ?>>
            <input type="submit" name="update" class="submit" value="update">
        </form>
    </div>
</body>
</html>
