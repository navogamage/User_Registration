<?php
include('db.php');

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#search").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#userTable tbody tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    
    <style>
        body {
            background: #f8f9fa;
        }
        .container {
            margin-top: 30px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-icon {
            border: none;
            background: transparent;
        }
        .btn-icon i {
            font-size: 18px;
        }
        .search-container {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-bottom: 20px; 
        }
        .search-label {
            font-weight: bold;
            margin-right: 10px;
        }
        .search-box {
            width: 300px;
        }
    </style>

</head>

<body>
<div class="container">
    <h2 class="mb-4">User List</h2>
    <div class="search-container">
        <label class="search-label">Search:</label>
        <input type="text" id="search" class="form-control search-box" placeholder="">
    </div>
    <table class="table table-striped" id="userTable">
        <thead class="table-primary">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact No</th>
            <th>Company</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= htmlspecialchars($row['first_name'] . " " . $row['last_name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['phone']) ?></td>
                <td><?= htmlspecialchars($row['additional_info']) ?></td>
                <td>


                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-icon">
                        <i class="bi bi-pencil-square text-primary"></i>
                    </a>
                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-icon" onclick="return confirm('Delete this user?')">
                        <i class="bi bi-trash text-danger"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>

        </tbody>
    </table>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>
