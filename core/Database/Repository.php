<?php

namespace Core\Database;
use Core\Database\DB;

class Repository extends DB
{
    protected string $table = '';

    // public function __construct(protected readonly QueryBuilder $queryBuilder)
    // {}

    public function select($columns = '*')
    {
        $conditions = [];
        $this->queryBuilder->select($columns, $this->getTableName(), $conditions);
    }


    public function test()
    {
        return "ok";
    }

}