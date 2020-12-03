



<html>
<head>
	<title>ADMIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


    <h2 style="color: black;"> DETAIL CUSTOMER</h2>
    <link rel="stylesheet" type="text/css" href="style.css">

<form action="detail.php" method="get">
	<label style="color: black;" >Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
    <table  width='100%' border=1 class="table1">
        <tr>
            <th>id_customer</th>
			<th>Email</th>
            <th>id_cs </th>
			<th>Email</th>
        </tr>

        <?php
        include_once("config.php");
        if(isset($_GET['cari'])){
        $result = mysqli_query($mysqli, "SELECT * from data_lengkap where id_customer  LIKE '%".$_GET['cari']."%' ");
        } else {
            $result = mysqli_query($mysqli, "SELECT b.id_cs,A.email_cs, B.id_customer, B.email_customer
             FROM cs A inner JOIN customer B
            ON A.id_cs = B.id_cs");
        }
        while ($user_data = mysqli_fetch_array($result)) {
			echo "<tr>";
            echo "<td>" . $user_data['id_customer'] .              "</td>";
            echo "<td>" . $user_data['email_customer'] .           "</td>";
            echo "<td>" . $user_data['id_cs'] .       "</td>";
            echo "<td>" . $user_data['email_cs'] .    "</td>";
        }
        ?>
    </table>
<br>
    <form method="get" action="logout.php">
		<button type="submit">logout</button>
    </form>
    <form method="get" action="index_customer.php">
		<button type="submit">Kembali</button>
	</form>
</body>
</html>