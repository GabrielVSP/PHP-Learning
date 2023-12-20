<?php 
    declare(strict_types = 1);
    session_start();  
    print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Project</title>
</head>
<body>

    <div>

        <?php if (isset($_SESSION['userID'])) {?>
        <p><?= $_SESSION['userUID'] ?></p>
        <a href="inc/logout.php">Logout</a>
        <?php }?>

    </div>
    
    <h2>Register</h2>

    <form action="inc/signup.php" method="post">

        <input type="text" name="username" id="username" placeholder="Username">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="text" name="password" id="password">
        <input type="text" name="passwordRepeat" id="password">

        <input type="submit" value="Register" name="submit">

    </form>
    
    <h2>Login</h2>

    <form action="inc/login.php" method="post">

        <input type="text" name="email" id="email" placeholder="Email">
        <input type="text" name="password" id="password">

        <input type="submit" value="Register" name="submit">

    </form>

</body>
</html>
