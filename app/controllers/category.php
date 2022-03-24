<?php
require_once 'controller.php';
class Category extends Controller
{
    public function __construct()
    {

        echo "<h1>inside main controller construct</h1>";
    }
    function index()
    {

        echo "<h1>index of users</h1>";
    }
    function category()
    {       
        $this->view('category');
    }
}