<?php
namespace test;
use user\User;


class IndexController extends BaseController
{
    public function index()
    {

        require_once 'View/index.php';
        return $this->db->get();
    }
}