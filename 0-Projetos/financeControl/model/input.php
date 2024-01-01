<?php

    include ROOT . "/inc/db.php";
    include ROOT . "/inc/keys.php";

    class Input extends DB {

        protected function addBought(String $type, Float $value, String $desc, String $cpf) {

            $keys = new Keys();
            $key = $keys->getKey()[0];

            $iv = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

            $cypher = sodium_bin2hex(sodium_crypto_secretbox($cpf, $iv, $key));

            $pdo = $this->connect();

            $sql = $pdo->prepare("INSERT INTO boughts (id, bType, descr, cpf, value) VALUES (null, ?, ?, ?, ?)");

            if ($sql->execute([$type, $desc, $cypher,$value])) {

                header("Location: http://localhost/PHPLearn/0-Projetos/financeControl/");

            }else {

                header("Location: http://localhost/PHPLearn/0-Projetos/financeControl?error=couldntreachdatabase/");

            }

        }

        protected function getLastEntry(String $type) {

            $pdo = $this->connect();

            $sql = $pdo->prepare("SELECT * FROM boughts WHERE bType = ? ORDER BY id DESC LIMIT 1");
            $sql->execute([$type]);

            return $sql->fetch();

        }

        protected function sumValues(String $type) {

            $pdo = $this->connect();

            if($type === "in" || $type === "out") {

                $sql = $pdo->prepare("SELECT SUM(value) FROM boughts WHERE bType = ?");
                $sql->execute([$type]);

                return $sql->fetch();

            }

            $sql = $pdo->prepare("SELECT SUM(value) FROM boughts");
            $sql->execute();      

            return $sql->fetch();

        }

        protected function fetchList() {

            $pdo = $this->connect();

            $sql = $pdo->query("SELECT * FROM boughts");
            
            return $sql->fetchAll();

        }

    }