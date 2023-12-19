<?php

namespace App\Repositories;
use PDO;
use Core\Database\QueryBuilder as DB;

class TestRepository 
{
     protected $table = "test";

    public function getAll()
    {
        return (new DB())->from($this->table)->find(3);

        // return (new DB())->from($this->table.' left join test2 ')->on(['test.id','=','test2.test_id'])->get();
        // return (new DB)->from($this->table)->where([['(id','=','1','OR','id','=','2)'],'OR',['id','=',3]])
        // ->orderBy('id','desc')->get();
        // return (new DB)->from($this->table)->where(['id','=',1])->limit(5);
        // $pdo = new PDO('mysql:host=db;dbname=php_pure;port=3306;charset=utf8', 'pure_db', '12345');
        // $stmt = $pdo->query('SELECT * FROM '.$this->table);
        // return $stmt->fetchAll();
    }


}



?>