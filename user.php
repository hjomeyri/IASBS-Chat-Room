<?php
require_once "database.php";
class user 
{
    private $Username;
    private $Phone_Number;
    private $Password;

    function get_username()
    {
        return $this->Username;
    }
    function get_phone_number()
    {
        return $this-> Phone_Number;
    }
    function get_password()
    {
        return $this->Password;
    }
    function set_username($username)
    {
        $this->Username = $username;
    }
    function set_password($password)
    {
        $this->Password =md5($password);
    }
    function set_Phone_Number($phone_number)
    {
        $this->Phone_Number=$phone_number;
    }
    function Check_User_Pass()
    {
        $paramTypes = "ss";
        $Parameters = array($this->Username, $this->Password);
        $result = database::ExecuteQuery('CheckUserPass', $paramTypes, $Parameters);

        if(mysqli_num_rows($result) > 0)
        {
            return true;
        }
        return false;
    }
    public function IsUsernameExist()
    {
        $paramTypes = "s";
        $Parameters = array($this->Username);
        $result = database::ExecuteQuery('IsUsernameExist', $paramTypes, $Parameters);

        if(mysqli_num_rows($result) > 0)
              return true;
        return false;
    }
    function Save()
    {
        if(!$this->IsUsernameExist()) {
            $paramTypes = "sss";
            $Parameters = array($this->Username, $this->Phone_Number,
                $this->Password);
            database::ExecuteQuery('AddUser', $paramTypes, $Parameters);
            return true;
        }
        return false;
    }
    public function IsPhoneNumberExist()
    {
        $paramTypes="s";
        $Parameters=array($this->Phone_Number);
        $result = database::ExecuteQuery('IsPhoneNumberExist',$paramTypes,$Parameters);
        if(mysqli_num_rows($result)>0)
        {
            return true;
        }
        return false;
    }
}