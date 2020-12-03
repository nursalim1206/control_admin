<html>

<head>
    <title     style="color: black;" > FORM CUSTOMER</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'     style="color: black;" >Daftar Customer</h2>

    <div class="kotak">
        <form action="add_customer.php" method="post" class="form_login">
            <label>ID customer</label>
            <input type="text" name="id_customer" class="form_login">
            <label>Email</label>
            <input type="text" name="email_customer" class="form_login">
            <label>Password</label>
            <input type="text" name=password class="form_login">
            <label>ID CS</label>
            <input type="text" name=id_cs class="form_login">

            <input type="submit" name="Submit" class="submit" value="Simpan"></td>

        </form>

    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
     $id_customer = $_POST['id_customer'];
        $email_customer = $_POST['email_customer'];
        $password = md5($_POST['password']);
        $id_cs = $_POST['id_cs'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO customer (id_customer, email_customer, password, id_cs) 
        VALUES('$id_customer','$email_customer', '$password','$id_cs')");

        // Show message when user added
        echo "customer added successfully. <a href='detail.php'>View customer</a>";
        header("Location: index_customer.php");
    }
    ?>
</body>

</html>
