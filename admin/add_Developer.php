<html>

<head>
    <title     style="color: black;">FORM DEVELOPER</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'     style="color: black;" >Daftar Developer</h2>

    <div class="kotak">
        <form action="add_Developer.php" method="post" class="form_login">
            <label>ID Developer</label>
            <input type="text" name="id_developer" class="form_login">
            <label>Email</label>
            <input type="text" name="email_developer" class="form_login">
            <label>Bagian</label>
            <input type="text" name="bagian" class="form_login">

            <input type="submit" name="Submit" class="submit" value="Simpan"></td>

        </form>

    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
     $id_developer = $_POST['id_developer'];
        $email_developer = $_POST['email_developer'];
        $bagian = $_POST['bagian'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO developer(id_developer, email_developer, bagian) 
        VALUES('$id_developer','$email_developer', '$bagian')");

        // Show message when user added
        echo "developer added successfully. <a href='detail.php'>View developer</a>";
        header("Location: index_developer.php");
    }
    ?>
</body>

</html>
