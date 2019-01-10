<?php

namespace Framework\Sys;
use Framework\Sys\Request;

/**
 *  Application kernel
 * 
 *  @author Carlos
 * 
 */
class Kernel {
    /**
     *  This methode allows initialize appication.
     *  Fronted Controlles
     *  @return void
     */
    static private $controller;
    static private $action;
    static private $params;

    public static function init(){
     
        //process the REQUEST_URI
        Request::exploding();
        self::$controller = Request::extract();
        self::$action=Request::extract();
      //  self::$params=Request:getParams();
        //var_dump(self::$controller);
        //var_dump(self::$action);
        //die;
        // call to Router applying
        self::router();
        // controller and action
    }
    /*
    static function getFileCont ():?string {
        // select default action and controller
        self::$controller=(self::$controller != "")?self::$controller: 'home';
        self::$action=(self:$action != "")?self::$action:'home';
        // find controllers
        $filename=strtolower(self::$controller).'.php';
        $fileroute=
            return $fileroute;
    }
    */
    /**
     *  looks for controller and action
     *  instantiate conttroller and calls the action
     *
     *  @return void
     *
     */
    static function router(){
        // if exists file controller and class controller
        self::$controller=(self::$controller!="")?self::$controller:'home';
        self::$action=(self::$action!="")?self::$action:'home';
        $class='\\Framework\App\Controllers\\'.ucfirst(self::$controller);
        echo $class;
        if(class_exists($class)){
            self::$controller = new $class(self::$params);
            if (is_callable(array(self::$controller, self::$action))){
                call_user_func(array(self::$controller, self::$action));
            }
            else {// is not callable
                self::$action='error';
                call_user_func(array(self::$controller, self::$action));
            }
        }
 /*       $filecontroller=self::getFileCont();
        if (is_readable($filecontroller)){
            $class='\\Framework\App\Controllers\\'.ucfirst(self::$controller);
            // instantiate class.
            self::$controller= new $class(self::$params);
            // action call
            if (is_callable(array(self::$controller, self::$action))){
                call_user_func(array(self::$controller, self::$action));
            }
            else {// is not callable
                self::$action='error';
                call_user_func(array(self::$controller, self::$action));
            }
        }
        else {
            self::$controller= new Error;
        }
*/
        // new object calls action
    }
}

