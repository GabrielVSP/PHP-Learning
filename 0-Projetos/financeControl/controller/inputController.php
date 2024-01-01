<?php

    include ROOT . "/model/input.php";

    class InputController extends Input {

        public function add($type, $value, $desc, $cpf) {

            $pattern = '/^([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})$/';
            $regex = preg_replace($pattern, '$1.$2.$3-$4', $cpf);

            $this->addBought($type, (int)$value, $desc, $regex);

        }

        public function getSum($type) {

           return $this->sumValues($type);

        }

        public function fetch() {

            return $this->fetchList();

        }

    }