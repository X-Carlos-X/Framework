<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 20/12/18
 * Time: 16:00
 */

namespace Framework\App\Models;


use Framework\Sys\Model;

class mReg extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function home() {

    }

	public function addUser(string $username, string $password): int {
        return 0;
    }

    public function userExists(string $username): bool {
        return false;
    }
}
