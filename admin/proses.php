<?php

if ($_GET['input'] == "customer"){

    header("Location:add_customer.php");
}

elseif ($_GET['input'] == "Developer"){

    header("Location:add_Developer.php");
}
else {
    header("Location:add_cs.php");
}


?>