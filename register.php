<?php

include('db.php');

//retrieves form input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $description = $_POST['description'];
    $address = $_POST['address'];
    $additional_info = $_POST['additional_info']; 
    $zip_code = $_POST['zip_code'];
    $place = $_POST['place'];
    $country = $_POST['country'];
    $code = $_POST['code']; 
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Check if the email already exists
    $check_query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    //error msg 
    if ($result->num_rows > 0) {
        echo "Error: Email already exists. Please use a different email.";
    } else {
        
        //insrt data into db
        $sql = "INSERT INTO users (title, first_name, last_name, birthday, gender, description, address, additional_info, zip_code, place, country, code, phone, email) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssssssss", $title, $first_name, $last_name, $birthday, $gender, $description, $address, $additional_info, $zip_code, $place, $country, $code, $phone, $email);

        if ($stmt->execute()) {
            echo "Registration successful! <a href='user_list.php'>View Users</a>";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();
}
?>
