<?php
require './database/loginconfig.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WildCoPhoto</title>
    <link rel="stylesheet" href="./style/css/adminlogin.css">
    <!--- Google Font Start --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@1,300&display=swap" rel="stylesheet">
    <!--- Google Font End --->
</head>
<body>
    <h1 id="welcome">WildCoPhoto Admin Login</h1>
    <div class="container">
        <h1>Please Login</h1>
        <?php if ($errorMsg !== ''): ?>
            <p><?php echo $errorMsg; ?></p>
        <?php endif; ?>
        <form action="./adminlogin.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
    </div>
    <footer>&copy;2023 WildCoPhotography</footer>
</body>
</html>