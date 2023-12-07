<?php 
    include('inc/newclass.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    
    <?php 
    
        $person1 = new Person('drive', 'Owner', 16);
        echo $person1->getName();

        $person2 = new Person('Mel', 'Admin', 17);
        echo $person2->getName();

    ?>

</body>
</html>