<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 10/01/19
 * Time: 22:48
 */

namespace Framework\App\Controllers;

use Framework\Sys\Controller;

class UserController extends Controller
{
    public function __construct($params = null, $dataView = null)
    {
        parent::__construct($params, $dataView);
        $this->addData([
           'page' => 'user'
        ]);
    }
}