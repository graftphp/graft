<?php

namespace App\Controllers;

use App\Blog;
use GraftPHP\Framework\DB;
use GraftPHP\Framework\Functions;
use GraftPHP\Framework\View;

class BlogController
{

    public function __construct()
    {
        if (GRAFT_CONFIG['DBHost'] == '' ||
            GRAFT_CONFIG['DBName'] == '' ||
            GRAFT_CONFIG['DBUser']) {
            die('A database connection is required to run the blog sample code.');
        }
    }

    public function delete($id)
    {
        $b = Blog::find($id);
        $b->delete();

        Functions::redirect('/');
    }

    public function index()
    {
        $b = new Blog();

        $this->data['blog'] = Blog::All('date', 'DESC');

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

    public function update()
    {
        $b = Blog::find($_POST['id']);
        $b->title = $_POST['title'];
        $b->date = $_POST['date'];
        $b->content = $_POST['content'];
        $b->save();

        Functions::redirect('/');
    }

}
