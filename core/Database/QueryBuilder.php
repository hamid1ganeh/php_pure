<?php

namespace Core\Database;

use Core\Database\DB;

class QueryBuilder extends DB
{
   //Declare the variables in this order
   public $fields;
   public $from;
   public $on;
   public $where;
   public $orderBy;
   public $limit;

   public function __construct(string $fields = '*')
   {
       $this->fields = "SELECT $fields";
   }

   public function from(string $table) {
       $this->from = "FROM $table";
       return $this;
   }

   public function where($conditions)
   {
       $this->where = $this->clause('WHERE', $conditions);
       return $this;
   }

   public function find($id)
   {
       $this->where =  'WHERE id='.$id;
       return $this->fetch();
   }

   public function on($conditions)
   {
       $this->on = $this->clause('ON', $conditions);
       return $this;
   }

   public function clause(string $prefix, $conditions) : string
   {
       $array[] = $prefix;
       foreach ($conditions as $condition) 
       {
           $array[] = is_array($condition)?implode(' ', $condition):$condition;
       }

       return implode(' ', $array);
   }

   public function orderBy(string $field = '', string $order = 'ASC')
   {
       if (empty($field)) return $this;
       $this->orderBy = "ORDER BY $field $order";
       return $this;
   }

   public function limit(int $limit = 1) {
       $this->limit = "LIMIT $limit";
       return $this;
   }

   public function get()
   {
     return $this->fetch();
   }

   public function fetch() {
      $sql = implode(' ', (array)$this);
      $db = self::initialize();
      $db->beginTransaction();
      $query = $db->prepare($sql);
      $db->commit();
      $query->execute();
      return $query->fetchAll();
   }
}