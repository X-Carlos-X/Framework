<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 28/11/18
 * Time: 17:34
 */

namespace Framework\App\Views;

use Framework\Sys\View;
class vHome extends View
{
    public function __construct($dataview = null,$dataTable=null)
    {
        parent::__construct($dataview,$dataTable);
        $this->output=$this->render('thome.php');
    }
}