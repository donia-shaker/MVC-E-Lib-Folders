<?php
require_once 'controller.php';
class Steps extends Controller
{
    public function __construct()
    {

        echo "<h1>inside main controller construct</h1>";
    }
    function index()
    {

        echo "<h1>index of users</h1>";
    }
    function steps()
    {       
        $this->view('steps');
    }
}