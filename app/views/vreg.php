<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 10/01/19
 * Time: 22:56
 */

namespace Framework\App\Views;

use Framework\Sys\View;

class vReg extends View
{
    public function __construct($dataview = null, $dataTable = null)
    {
        parent::__construct($dataview, $dataTable);
        $this->output = $this->render('treg.php');
    }
}