<?php

namespace App\Http\Controllers;
use App\Repositories\TestRepository;
use Core\Database\Connection;
use Rakit\Validation\Validator;

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

    public function create()
    {
        return view("test.create");
    }

    public function store()
    {
        $validator = new Validator;
        $validation = $validator->validate($_POST + $_FILES,[
            'title'                  => 'required']);
        
        if ($validation->fails()) 
        {
            $errors = $validation->errors();
            return view("test.create",["errors"=>$errors->firstOfAll()]);
        }
         else 
        {
            // validation passes
            echo "Success!";
        }
     
    }
}