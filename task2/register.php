<?php
include "db.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $qry = $conn->prepare("SELECT * FROM login WHERE username = ?");
    $qry->bind_param("s", $username);
    $qry->execute();
    $result = $qry->get_result();
    if ($result->num_rows > 0) {
        echo "Username already exists.";
        exit();
    }

    if ($password === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO login (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);
        $stmt->execute();
        $stmt->close();
        echo "<script>alert('Registration successful!');</script>";
    } else {
        echo "<script>alert('Passwords do not match.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <div class="card">
            <form action="register.php" method="post">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password">
                </div>
                <div class="form-group">
                    <label>Confirm Password:</label>
                    <input type="password" name="confirm_password">
                </div>
                <button type="submit" name="register">Register</button>
                <br>
                <a href="login.php">Already have an account? Login here.</a>
            </form>
        </div>
    </div>
</body>
</html>
</body>
</html>