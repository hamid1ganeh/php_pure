<?php

namespace App\Http\Controllers;
use App\Repositories\TestRepository;
use Core\Database\Connection;

class TestController
{
    public function index()
    {
        $test = new TestRepository();
        $freinds = $test->getAll();
   
        $name = "Hamid";
        $books = array("book 1","book 2","book 3");
      
        $test = new TestRepository();
        $freinds = $test->getAll();
 
        return view("test.index",['name'=>$name,
                                  'books'=>$books,
                                  'freinds'=>$freinds]);

    }
}