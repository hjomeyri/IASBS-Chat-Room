<?php
require_once "database.php";
class massage
{
    private $Sender;
    private $Resiver;
    private $Date;
    private $Time;
    private $Massage;

    function get_massage()
    {
        return $this->Massage;
    }
    function get_date()
    {
        return $this->Date;
    }
    function get_time()
    {
        return $this->Time;
    }
    function set_massage($massage)
    {
        $this->Massage = $massage;
    }
    function set_date($date)
    {
        $this->Date = $date;
    }
    function set_Time($time)
    {
        $this->Time=$time;
    }
 
    function edit_massage($corrected_massage,$date,$time)
    {
        $this->Massage = $corrected_massage;
        $this->Date = $date;
        $this->Time = $time;
    }
}