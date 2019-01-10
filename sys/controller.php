<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 27/11/18
 * Time: 17:37
 */

namespace Framework\Sys;

use Framework\Sys\Registry;
abstract class Controller
{
    protected $model;
    protected $view;
    protected $params;
    protected $conf; //Object app configuration
    protected $dataView=array();
    protected $app;
    protected $dataTable=array();

    function  __construct($params=null, $dataView=null)
    {
        $this->params=$params;
        $this->conf=registry::getInstance();
        $this->app=(array)$this->conf->app;
        $this->dataView= $dataView;
        $this->addData($this->dataView);
        $this->addData($this->app);
    }
    protected function addData($array){
        if(is_array($array)){
            if($this->is_single($array)){
                $this->dataView=array_merge((array)$this->dataView,$array);
            }else {
                $this->dataTable=$array;
            }
        }
    }

    /**
     *  determines if is multilevel array or not.
     * @return boolean
     */
    protected function is_single($data){
        foreach ($data as $value){
            if (is_array($value)){
                return false;
            }
            return true;
        }
    }
    protected function ajax($output){
        if(is_array($output)){
            echo json_decode($output);
        }
    }

}
