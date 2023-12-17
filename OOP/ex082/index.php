<?php
    declare(strict_types = 1);
    include "inc/autoload.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $controller = new UsersController();
        //$controller->addUser('Ca', 'Polar', '2010-1-6');

        $view = new UsersView();
        $view->showUser(5);

    ?>

</body>
</html>