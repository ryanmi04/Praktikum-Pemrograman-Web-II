<?php

namespace App\Controllers;

use App\Models\BooksModel;

class BooksController extends BaseController
{
    public function index()
    {
        $books = new BooksModel();
        $data['bookses'] = $books->where('status', 'published')->findAll();
        echo view('index', $data);
        
    }

    
    
    public function admin()
	{
		echo view("admin");
	}
}
