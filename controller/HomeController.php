<?php

require "Controller.php";

class HomeController extends Controller
{
    static function index()
    {
        return self::view("./views/home.php");
    }

    static function store()
    {
        return self::view("./views/home.php");
    }
} 