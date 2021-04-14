<?php

class Connection {
    protected $dbh;

    protected function connect() {
        try {
            return $this->dbh = new mysqli("localhost","root", "root", "NetApi", "8889");
        } catch(Exception $exception) {
            print `¡Error DB!: ${$exception->getMessage()} <br/>`;
            die();
        }
    }

    public function set_names() {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}