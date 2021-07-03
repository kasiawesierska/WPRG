<?php
class Person
{
    public $id;
    public $user;
    public $pass;
    public $name;
    public $surname;
    public $sex;
    public $email;
    public $phone;
    public $typ_karty;
    public $numer_karty;


    public function setFullName($name, $surname,$email,$sex)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->sex = $sex;
    }

    public function getFullName()
    {
        return $this->name.' '.$this->surname;
    }
}
