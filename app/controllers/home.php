<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 27/11/18
 * Time: 17:29
 */

namespace Framework\App\Controllers;

use Framework\Sys\Controller;
use Framework\App\Views\vHome;
use Framework\App\Models\mHome;

class Home extends Controller
{
    function __construct($params)
    {
        parent::__construct($params);
        $this->addData([
            'page'=>'Home'
        ]);
        $this->model= new mHome();
        $this->view = new vHome($this->dataView,$this->dataTable);
        $this->view->show();
        //print_r($this->dataView);


        //echo 'controlador home<br>';
    }

    function home(){
        //print_r($this);
        //echo 'acción home<br>';
    }

}