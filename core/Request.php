<?php


namespace app\core;

class Request
{
    public function getPath()
    {     
        $path = $_SERVER['REQUEST_URI'] ?? '/';
    }

    public function getMethod()
    {

    }
}