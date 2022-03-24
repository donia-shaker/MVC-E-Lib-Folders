<?php
require_once 'controller.php';
class Detailes extends Controller
{
    public function __construct()
    {

        echo "<h1>inside main controller construct</h1>";
    }
    function index()
    {

        echo "<h1>index of users</h1>";
    }
    function detailes()
    {       
        $this->view('detailes');
    }
}