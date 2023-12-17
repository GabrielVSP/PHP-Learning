<?php
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

        $test = new Test();
        //$test->addUser("akinori", "br", "2005-8-13");
        //$test->getUser(1);
        $test->getUsers();

    ?>

</body>
</html>