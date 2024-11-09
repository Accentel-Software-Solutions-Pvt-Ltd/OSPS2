<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu</title>
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .sidemenu {
            width: 200px;
            background-color: #333;
            color: white;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            height: 100vh;
        }
        .sidemenu h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .sidemenu a, .dropdown-content button {
            display: block;
            color: white;
            padding: 15px 20px;
            text-decoration: none;
            transition: background-color 0.3s;
            border: none;
            background: none;
            cursor: pointer;
            text-align: center;
            width: 100%;
            box-sizing: border-box;
        }
        .sidemenu a:hover, .dropdown-content button:hover {
            background-color: #575757;
        }
</style>
    </style>
</head>
<body>
    <div class="sidemenu">
        <h2>Menu</h2>
        <a href="#">Dashboard</a>
        <a href="usermanagement.php">User Management</a>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="content">
        <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
        <p>This is your dashboard.</p>
    </div>
</body>
</html>
