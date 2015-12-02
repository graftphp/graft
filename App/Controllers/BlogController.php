<?php

namespace App\Controllers;

use App\Blog;
use GraftPHP\Framework\DB;
use GraftPHP\Framework\Functions;
use GraftPHP\Framework\View;

class BlogController
{

    public function index() 
    {
        $b = new Blog();

        $this->data['blog'] = Blog::All();

        View::Render('index', $this->data);
    }

    public function store()
    {
        $b = new Blog();
        $b->title = $_POST['title'];
        $b->date = $_POST['date'];
        $b->content = $_POST['content'];
        $b->save();

        Functions::redirect('/');
    }

}
