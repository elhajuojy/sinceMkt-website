<?php 


namespace Model ;


use core\Database;
use core\Model;

class Admin extends Model{
    public  int $id ;
    public string $name ;
    public string $login ;
    public string $password;
   
    public function __construct()
    {
        parent::__construct(get_class($this));
    }
    
    
    public function findWhere(string $login , string $password){
        return $this->db->query("SELECT * FROM Admin WHERE login = :login AND password = :password",
        ['login'=>$login,'password'=>$password])
        ->find(get_class($this));
    }

    





}

