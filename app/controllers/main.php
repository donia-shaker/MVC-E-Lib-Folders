<?php
require_once 'controller.php';
class Main extends Controller
{
    public function __construct()
    {

        echo "<h1>inside main controller construct</h1>";
    }
    function index()
    {

        echo "<h1>index of users</h1>";
    }
    function main()
    {       
        $this->view('main');
    }
}