<?php
class Controller{
    public static function CreateView($viewName){
        require_once './application/views/'.$viewName.'.php';
    }
}