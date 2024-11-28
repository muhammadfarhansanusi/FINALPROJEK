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
    <title>Register</title>
    <style>
        /* Mengatur body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9; /* Warna latar belakang putih lembut */
            color: #333; /* Warna teks abu-abu gelap */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Style untuk form */
        form {
            background-color: #fff; /* Latar belakang putih */
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
            width: 100%;
            max-width: 400px;
        }

        /* Heading */
        h2 {
            text-align: center;
            color: #333; /* Warna teks abu-abu gelap */
            margin-bottom: 20px;
            font-size: 24px;
        }

        /* Label */
        label {
            font-size: 14px;
            margin-bottom: 8px;
            display: inline-block;
        }

        /* Input */
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px 0;
            border: 1px solid #ccc; /* Border abu-abu terang */
            border-radius: 5px;
            background-color: #f9f9f9; /* Latar belakang input */
            color: #333; /* Warna teks */
        }

        /* Tombol register */
        input[type="submit"] {
            background-color: #007bff; /* Tombol biru */
            color: #fff; /* Teks putih */
            border: none;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Biru lebih gelap saat hover */
        }

        /* Fokus pada input */
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #007bff; /* Border biru saat fokus */
        }

        /* Teks kecil di bawah form */
        .form-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555; /* Abu-abu terang */
        }

        .form-footer a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .form-footer a:hover {
            color: #0056b3; /* Biru lebih gelap saat hover */
        }
    </style>
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
