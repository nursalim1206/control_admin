
<html>

<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id_customer = $_POST['id_customer'];
    $email_customer = $_POST['email_customer'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE customer SET id_customer='$id_customer',
	email_customer='$email_customer' WHERE 
    id_customer=$id_customer");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php

$id_customer = $_GET['id_customer'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM customer WHERE id_customer=$id_customer");

while ($user_data = mysqli_fetch_array($result)) {
   $id_customer = $user_data['id_customer'];
    $email_customer = $user_data['email_customer'];
}
?>
<head>
    <title     style="color: black;" >Edit Customer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'     style="color: black;">Edit customer</h2>

    <div class="kotak">
        <form action="edit_costumer.php" method="post" class="form_login">
            <input type="hidden" name="id_customer" class="form_login" value=<?php echo $id_customer; ?>>
            <label     style="color: black;" >email_customer</label>
            <input type="text" name="email_customer" class="form_login" value=<?php echo $email_customer; ?>>
            <input type="submit" name="update" class="submit" value="update">
        </form>
    </div>
</body>
</html>
