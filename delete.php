<?php

include('db.php');
$id = $_GET['id'];
$conn->query("DELETE FROM users WHERE id=$id");
header("Location: user_list.php");//redirects browser to user_list.php

?>
