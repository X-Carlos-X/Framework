<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Framework\Sys;

/**
 * Description of request
 *
 * @author Carlos
 */
class request {
        static private $query=array();
    
    static function exploding(){
        $array_query=explode('/',$_SERVER['REQUEST_URI']);
        array_shift($array_query);
        if (end($array_query) == ""){
            array_pop($array_query);
        }
        self::$query=$array_query;
        
    }
    /**
     *  extract item from request uri
     * 
     * @return string
     */
    static function extract(){
        return array_shift(self::$query);
    }
    
    /**
     *  extract array parameters from request uri
     * 
     *  @return array associative array
     */
    static function getParams(){
        
        return $result;
    }
}
