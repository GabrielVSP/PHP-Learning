<?php 

    declare(strict_types = 1);

    require ROOT . "/controller/inputController.php";

    $controller = new InputController();

    if (isset($_POST['submit'])) {

        $type = $_POST['type'];
        $desc = $_POST['desc'];
        $cpf = $_POST['cpf'];
        $value = $_POST['value'];

        $controller->add($type, $value, $desc, $cpf); 

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Control</title>
</head>
<body>

    <main>

        <section class="display">

            <div class="in">
                <p>+ <?= "R$" . number_format($controller->getLast('in')['value'], 2, ',', '.') ?></p>
            </div>

            <div class="out">
                <p>- <?= "R$" . number_format($controller->getLast('out')['value'], 2, ',', '.') ?></p>
            </div>

            <div class="total">

                <p>R$ 00,00</p>

            </div>

        </section>

        <section class="inputs">

            <form method="post">

                <input type="text" name="desc" id="desc" placeholder="Descrição...">

                <input type="text" name="cpf" id="cpf" placeholder="CPF usado">

                <input type="number" name="value" id="value" placeholder="Valor" min="0" step="0.01">

                <select name="type" id="type">
                    <option value="in">Entrada</option>
                    <option value="out">Saída</option>
                </select>

                <input type="submit" value="Registrar" name="submit">

            </form>

        </section>

        <section class="list">

           <table>

            <thead>

                <tr>

                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Tipo</th>

                </tr>

            </thead>

           </table>

        </section>

    </main>
    
</body>
</html>