<?php
class Request{
    private $get;
    private $post;
    private $request;
    private $param = ['id','roz'];

    public function __construct()
    {
        $this->get = $_GET;
        $this->post = $_POST;
        $this->request = $_REQUEST;
    }

    /**
     * Returm bool
     */

    public function isPost(){
        return (bool)$_POST;
    }

    public function isGet(){
        return (bool)$_GET;
    }

    /**
     * @param $name
     * @return mixed
     * 
     * Return query data;
     */
    
    public function get($name){
        if($this->isGet()){
            return $this->get[$name];

        }
    }
    
    public function post($name){
        if($this->isPost()){
            return $this->post[$name];
        }
    }
    
    public function getParameter(){
        $param = [];
        foreach ($this->param as $v){
            if(array_key_exists($v,$this->request)){
                $param[$v] = $this->request[$v];
            }
        }
        return $param;
    }
    
}