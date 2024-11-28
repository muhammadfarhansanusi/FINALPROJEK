<?php

// Cek apakah pengguna sudah login, jika iya, arahkan ke halaman utama
if (isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_register.css">
    <title>Register</title>
    
</head>
<body>

    <form action="register_process.php" method="POST">
        <h2>Register</h2>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        
        <input type="submit" value="Register">

        <!-- Footer form untuk link tambahan -->
        <div class="form-footer">
            <p>Sudah punya akun? <a href="login.php">Login</a></p>
        </div>
    </form>

</body>
</html>
