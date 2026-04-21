<?php
    session_start();
    include "db.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $qry =$conn->prepare("SELECT * FROM login WHERE username = ?");
        $qry->bind_param("s", $username);
        $qry->execute();
        $result = $qry->get_result();

        if($result->num_rows > 0){
            $user = $result->fetch_assoc();
            
            if (password_verify($password, $user['password'])) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["username"] = $user["username"];
                echo "<script>alert('Login successful');</script>";
                exit(); 

            } else {
                echo "<script>alert('Login failed: Wrong password');</script>";
            }
        } else {
            echo "<script>alert('User not found');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
     <div class="container">
        <h1>Login</h1>
        <div class="card">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <button type="submit" name="login">Login</button>
                <br>
                <a href="register.php">Don't have an account? Register here.</a>
            </form>
        </div>
    </div>
</body>
</html>