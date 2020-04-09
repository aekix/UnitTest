<?php

namespace App;

class User {
    private $email;
    private $lastname;
    private $firstname;
    private $age;

    public function __construct($mail, $age, $firstname, $lastname)
    {
        $this->email = $mail;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function isValidAge()
    {
        return ($this->age >= 13 ? 1 : 0);
    }
    public function isValidFirstname()
    {
        return (!empty($this->firstname));
    }
    public function isValidLastname()
    {
        return (!empty($this->lastname));
    }
    public function isValidEmail()
    {
        return(filter_var($this->email, FILTER_VALIDATE_EMAIL));
    }

    public function isValidUser()
    {
        if ($this->isValidAge() &&
            $this->isValidLastname() &&
            $this->isValidFirstname() &&
            $this->isValidEmail())
                return true;
        return false;
    }
}