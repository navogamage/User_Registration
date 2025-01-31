<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  

    <style>  
        body {
            background: linear-gradient(to right, #76b2fe, #b69efe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 800px;
        }
        .left-section {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px 0 0 10px;
        }
        .right-section {
            background: #3c40c6;
            color: white;
            padding: 20px;
            border-radius: 0 10px 10px 0;
        }
        .general-info-heading {
            color: blue;
        }
        .contact-details-heading {
            color: white;
        }
        .form-control {
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0;
            box-shadow: none;
            background: transparent;
        }
        .left-section .form-control {
            color: black;
        }
        .right-section .form-control {
            color: white;
        }
        .form-control:focus {
            box-shadow: none;
            border-bottom: 2px solid #007bff;
        }
        .btn-custom {
            border-radius: 20px;
            padding: 8px 30px;
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
        }
        .right-section select[name="country"] {
            color: white;
        }
        .right-section select[name="country"] option {
            color: black;
        }
        .right-section select[name="country"]:focus {
            color: white;
        }
    </style>
</head>
<body>

<div class="container d-flex">
    <div class="col-md-6 left-section">
        <h4 class="general-info-heading">General Information</h4>
        <form id="registerForm" action="register.php" method="POST">
            <div class="mb-3">
                <label>Title</label>
                <select name="title" class="form-control">
                    <option>Mr.</option>
                    <option>Ms.</option>
                    <option>Mrs.</option>
                </select>
            </div>
            <div class="mb-3 d-flex">
                <div class="me-2" style="flex: 1;">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" required>
                </div>
                <div style="flex: 1;">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" required>
                </div>
            </div>
            <div class="mb-3 d-flex">
                <div class="me-2" style="flex: 1;">
                    <label>Birthday</label>
                    <input type="date" name="birthday" class="form-control">
                </div>
                <div style="flex: 1;">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
    </div>

    <div class="col-md-6 right-section">
        <h4 class="contact-details-heading">Contact Details</h4>
        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="mb-3">
            <label>Additional Information</label>
            <input type="text" name="additional_info" class="form-control">
        </div>
        <div class="mb-3 d-flex">
            <div class="me-2" style="flex: 1;">
                <label>Zip Code</label>
                <input type="text" name="zip_code" class="form-control">
            </div>
            <div style="flex: 1;">
                <label>Place</label>
                <input type="text" name="place" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label>Country</label>
            <select name="country" class="form-control">
                <option>USA</option>
                <option>UK</option>
                <option>Sri Lanka</option>
                <option>India</option>
                <option>Other</option>
            </select>
        </div>
        <div class="mb-3 d-flex">
            <div class="me-2" style="flex: 1;">
                <span>Code+</span>
                <input type="text" name="code" class="form-control">
            </div>
            <div style="flex: 2;">
                <label>Phone Number</label>
                <input type="text" name="phone" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="checkbox" required> I do accept the <a href="#" style="color: white;">Terms and Conditions</a> of your site.
        </div>
        <div class="btn-container">
            <button type="submit" class="btn btn-light btn-custom">Submit</button>
            <a href="user_list.php" class="btn btn-light btn-custom">User List</a>
        </div>
    </div>
    </form>
</div>

</body>
</html>
