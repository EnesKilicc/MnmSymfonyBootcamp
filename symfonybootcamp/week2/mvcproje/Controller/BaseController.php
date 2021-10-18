<?php

namespace test;

use user\User;

class BaseController
{
    protected $db;
    public function __construct(){
        include_once 'Model/User.php';
        $this->db=new User();
    }


}