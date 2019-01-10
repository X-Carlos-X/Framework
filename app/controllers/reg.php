<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 20/12/18
 * Time: 16:04
 */

namespace Framework\App\Controllers;


use Framework\Sys\Controller;
use Framework\App\Views\vReg;

class Reg extends Controller
{
    public function __construct($params)
    {
        parent::__construct($params);
        $this->addData([
           'page' => 'Reg'
        ]);

        $this->view = new vReg($this->dataView, $this->dataTable);
        $this->view->show();
    }

    function reg() {
        $email=filter_input( INPUT_POST, $_POST['email'], FILTER_VALIDATE_EMAIL);
	    $password1=filter_input( INPUT_POST,$_POST['password1']);
	    $password2=filter_input( INPUT_POST,$_POST['password2']);
	    $username=filter_input( INPUT_POST,$_POST['username'], FILTER_SANITIZE_STRING);
	    var_dump();
    }

    function home() {

    }
  /*  public function enviarFormulario() {
        $username = $_POST['username'];
        $password = $_POST['password']:
        $password2 = $_POST['password2']:

        if ($password != $password2) {
            $this->addData(['error' => 'Las contraseñas no coinciden']);
            $this->view = new vistaRegError($this->dataView);
            return $this->view->show();
        }

        $result = $this->model->addUser($username, $password);

        if ($result === true) {
            $this->addData(['success' => 'Usuario creado correctamente']);
            $this->view = new vistaRegCorrecto($this->dataView);
            return $this->view->show();
        } else {
            $this->addData(['error' => 'Ha surgido un error al crear el usuario']);
            $this->view = new vistaRegError($this->dataView);
            return $this->view->show();
        }
    } */
}