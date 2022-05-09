<?php   

class MyUserClass   
{   

    private $dbconn;

    public function __construct()
    {
        $this->dbconn = new DatabaseConnection('localhost','user','password');
    }

    public function getUserList()   
    {   
           
        $results = $this->dbconn->query('select name from user');

        sort($results);   

        return $results;
    }   
}