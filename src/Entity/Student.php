<?php

namespace App\Entity;

class Student
{
    protected $id;
    protected $login;
    protected $alias;
    protected $pwd;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        return $this->login = $login;
    }

    public function getAlias() {
        return $this->alias;
    }

    public function setAlias($alias) {
        return $this->alias = $alias;
    }

    public function getPwd() {
        return $this->pwd;
    }

    public function setPwd($pwd) {
        $this->pwd = $pwd;
    }
}