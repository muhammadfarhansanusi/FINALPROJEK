<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
</head>
<body>
    <h1>ini halaman login</h1>
    <form action="./backend/login_proses.php" method="POST">
        <input type="email" name="email" id="email" placeholder="email"/>
        <input type="password" name="password" id="password" placeholder="password"/>
        <button type="submit">Login</button>
    </form>
    
</body>
</html>