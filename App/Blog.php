<?php

namespace App;

use GraftPHP\Framework\Model;

class Blog extends Model 
{

    public static $db_tablename = 'blog';
    public static $db_idcolumn = 'id';
    public static $db_columns = [
        ["title", "varchar(255)"],
        ["date", "date"],
        ["content", "text"],
    ];

}
