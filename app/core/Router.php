<?php
namespace app\core;
class Router{
    protected $params = [];
public function match()
    {
    $url = trim($_SERVER['REQUEST_URI'], '/');
    var_dump($url);
    }

    public function run(){
    $this -> match();
    }
}