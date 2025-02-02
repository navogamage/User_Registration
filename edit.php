<?php

//db connection
include('db.php');

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();

//check if the form was submitted and retrive form values
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $additional_info = $_POST['additional_info'];
     
    //update details
    $update_query = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email', phone='$phone', additional_info='$additional_info' WHERE id=$id";
    $conn->query($update_query);
    
    //redirects to user_list.php
    header("Location: user_list.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> //bootstrap for styling
</head>
<body>

<div class="container mt-5">
    <h2>Edit User</h2>
    
    
    <form method="POST">
        <div class="mb-3">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" value="<?= htmlspecialchars($row['first_name']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control" value="<?= htmlspecialchars($row['last_name']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($row['email']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($row['phone']) ?>">
        </div>
        <div class="mb-3">
            <label>Company</label>
            <input type="text" name="additional_info" class="form-control" value="<?= htmlspecialchars($row['additional_info']) ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="user_list.php" class="btn btn-secondary">Cancel</a>
    </form>

</div>

</body>
</html>
