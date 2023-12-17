<?php

    class Test extends DB {

        /**
         * Get all users from the database
         */

        public function getUsers() {

            $sql = $this->connect()->prepare("SELECT * FROM users");
            $sql->execute();

            echo "<pre>";
            print_r($sql->fetchAll());
            echo "</pre>";

        }

        /**
         * Get a specific user by it's ID
         */

        public function getUser(int $id) {

            $sql = $this->connect()->prepare("SELECT * FROM users WHERE id = ?");
            $sql->execute([$id]);

            echo "<pre>";
            print_r($sql->fetch());
            echo "</pre>";

        }

        /**Add a new user into the db */

        public function addUser($first, $last, $birth) {

            $sql = $this->connect()->prepare("INSERT INTO users(id, firstname, lastname, birth) VALUES (null, ?, ?, ?) ");

            if( $sql->execute([$first, $last, $birth])) {
                echo 'added succefuly';
            }

        }

    }