<html>

<head>
    <title>FORM CUSTOMER SERVICE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'>Daftar customer service</h2>

    <div class="kotak">
        <form action="add_cs.php" method="post" class="form_login">
            <label>ID Customer Service</label>
            <input type="text" name="id_cs" class="form_login">
            <label>Email</label>
            <input type="text" name="email_cs" class="form_login">
            <label>ID developer</label>
            <input type="text" name=id_developer class="form_login">

            <input type="submit" name="Submit" class="submit" value="Simpan"></td>

        </form>

    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
     $id_cs = $_POST['id_cs'];
        $email_cs = $_POST['email_cs'];
        $id_developer = $_POST['id_developer'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO cs (id_cs, email_cs, id_developer) 
        VALUES('$id_cs','$email_cs', '$id_developer')");

        // Show message when user added
        echo "customer added successfully. <a href='index_cs.php'>View customer Service </a>";
        header("Location: index_cs.php");
    }
    ?>
</body>

</html>
