<html>

<head>
    <title> Data Developer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>




    <h2 line-height='50%'
    style="color: black;"
    >Daftar Developer</h2>
    <link rel="stylesheet" type="text/css" href="style.css">

    <table  width='100%' border=1  class="table1">
        <tr>
            <th>id_developer</th>
            <th>email_developer</th>
            <th colspan="2">proses</th>
        </tr>

        <?php
        include_once("config.php");
        $result = mysqli_query($mysqli, "SELECT * FROM developer ORDER BY id_developer ASC");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'>" . $user_data['id_developer'] . "</td>";
            echo "<td>" . $user_data['email_developer'] . "</td>";
            echo "<td align='center'><a href='edit_developer.php?id_developer=$user_data[id_developer]'>Edit</a></td>";

            echo "<td align='center'><a href='delete_developer.php?id_developer=$user_data[id_developer]'>Delete</a></td></tr>";
        }
        ?>
    </table>
    <form action="proses.php" method="get">
      <p style="color: black;">Masukan Data
	  <select name='input'>
		<option value='customer' >customer</option>
		<option value='CS'       >CS</option>
		<option value='Developer'>Developer</option>
	  </select>
	  </p>
      <input type='submit' name='tombol' value='kirim'
       />
</form>
<a href="detail_customer.php">DETAIL Customer</a>
    <a href="detail_CS.php">DETAIL CS</a>
    <a href="logout.php">LOGOUT</a>
</body>

</html>
