<?php 


namespace Model ;


use core\Database;

class Admin{
    public  int $id ;
    public string $name ;
    public string $login ;
    public string $password;
    private  Database  $db =db;
    public function __construct()
    {
    }
    
    
    public function findWhere(string $login , string $password){
        return $this->db->query("SELECT * FROM Admin WHERE login = :login AND password = :password",
        ['login'=>$login,'password'=>$password])
        ->find(get_class($this));
    }

    
    





}

