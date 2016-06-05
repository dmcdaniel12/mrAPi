<?php

require_once __DIR__ . '/../../vendor/autoload.php';

require_once __DIR__ . '/../../vendor/catfan/medoo/medoo.php';

class Database
{
    
    private $db;


    public function __construct() {
        $this->setDb(new medoo([
            'database_type' => 'mysql',
            'database_name' => 'blog',
            'server'        => 'localhost',
            'username'      => 'root',
            'password'      => '',
            'charset'       => 'utf8'
        ]));
    }
    
    public function setDb($db)
    {
        $this->db = $db;
    }
    
    public function getDb()
    {
        return $this->db;
    }
    
    public function select($table,$columns,$where)
    {
        return $this->getDb()->select($table,$columns,$where);
    }
    
    public function insert($table,$data)
    {
        $this->getDb()->insert($table, $data);
    }
    
    public function update($table,$data,$where)
    {
        $this->getDb()->update($table,$data,$where);
    }
    
    public function delete($table,$where)
    {
        $this->getDb()->delete($table,$where);
    }
}

