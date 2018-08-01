<?php
/**
 * Created by PhpStorm.
 * User: dharmy-ko
 * Date: 7/31/2018
 * Time: 2:59 PM
 */

class User
{
    private $firstname, $lastname, $email, $username, $password, $confirmpassword, $mobilenumber, $address, $gender, $comment;
    public $date;

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        switch ($name) {
            case'firstname' :
                return $this->fullname = $value;
            case'lastname' :
                return $this->fullname = $value;
            case'email' :
                return $this->email = $value;
            case'username' :
                return $this->username = $value;
            case'password' :
                return $this->password = $value;
            case'confirmpassword' :
                return $this->confirmpassword = $value;
            case'mobilenumber' :
                return $this->mobilenumber = $value;
            case'address' :
                return $this->address = $value;
            case'gender' :
                return $this->gender = $value;
            case 'comment' :
                return $this->comment = $value;
        }
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        switch ($name) {
            case 'firstname' :
                return $this->firstname;
            case 'lastname' :
                return $this->lastname;
            case 'email' :
                return $this->email;
            case 'username' :
                return $this->username;
            case 'password' :
                return $this->password;
            case 'confirmpassword' :
                return $this->confirmpassword;
            case 'mobilenumber' :
                return $this->mobilenumber;
            case 'address' :
                return $this->address;
            case 'gender' :
                return $this->gender;
            case 'comment' :
                return $this->comment;
        }
    }

    public function getFullName(){
        return $this->firstname . ' '. strtoupper($this->lastname);
    }

    public function firstname($value) {
        return $this->firstname = $value;
    }

    public function lastname($value) {
        return $this->lastname = $value;
    }

    public function email($value) {
        return $this->email = $value;
    }

    public function username($value) {
        return $this->username = $value;
    }

    public function password($value) {
        return $this->password = $value;
    }

    public function confirmpassword($value) {
        return $this->confirmpassword = $value;
    }

    public function mobilenumber($value) {
        return $this->mobilenumber = $value;
    }

    public function address($value) {
        return $this->address = $value;
    }

    public function gender($value) {
        return $this->gender = $value;
    }

    public function getcomment($value) {
        return $this->comment = $value;
    }

    public function redirect_to($new_location) {
        header("Location: $new_location" );
        exit;
    }

    public function mysql_prep($string) {
        global $connection;

        $escaped_string = mysqli_real_escape_string($connection, $string);
        return $escaped_string;
    }

    public function confirm_query($result_set) {
        if (!$result_set) {
            die("Database query failed.");
        }
    }

    function deletecommentbyid($custid) {
        global $connection;

        $query = "SELECT * FROM review WHERE user_id = $custid";
        $result = mysqli_query($connection, $query);

        if ($result) {
            return $row = mysqli_fetch_assoc($result);
        }
    }

}