<?php

    if(isset($_POST['email'])  || isset($_POST['password'])) {
        $email = $_POST ['email'];
        $password = $_POST ['password'];

        if($email == 'admin@admin.com' && $password == 'admin') {
            header('Location: ./../admin_dashboard.php');
        } else {
            echo "email atau password salah";
        }

    }
?>