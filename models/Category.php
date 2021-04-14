<?php

    class Category extends Connection {

        public function getCategory() {
            $connect = parent::connect();
            parent::set_names();
            $sql = "SELECT * FROM tm_category WHERE state = 1";

            $sql = $connect->query($sql);

            return $sql->fetch_all();
        }

        public function getCategoryById($cat_id) {
            $connect = parent::connect();
            parent::set_names();

            $sql = "SELECT * FROM tm_category WHERE state = 1 AND cat_id = $cat_id;";
            $sql = $connect->query($sql);

            return $sql->fetch_all();
        }

        public function insertCategory($cat_name, $cat_obs) {
            $connect = parent::connect();
            parent::set_names();

            $sql = "INSERT INTO tm_category VALUES(null,'$cat_name', '$cat_obs', 1);";
            $connect->query($sql);
        }

        public function updateCategory($cat_id, $cat_name, $cat_obs) {
            $connect = parent::connect();
            parent::set_names();

            $sql = "UPDATE tm_category set cat_name = '$cat_name', cat_obs = '$cat_obs' WHERE cat_id = $cat_id";
            $connect->query($sql);
        }

        public function deleteCategory($cat_id) {
            $connect = parent::connect();
            parent::set_names();

            $sql = "UPDATE tm_category set state = 0 WHERE cat_id = $cat_id;";
            $connect->query($sql);
        }
    }