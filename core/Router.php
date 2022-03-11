<?php

namespace app\core;

class Router
{
    public Request $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    protected array $routes = [];
    public function get($path, $callback){
     
           $this->routes['get'][$path] = $callback; 
         
    }

    public function resolve(){
       $this->request->getPath();
    }
}