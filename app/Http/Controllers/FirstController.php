<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 30.06.2018
 * Time: 14:25
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class FirstController extends Controller
{
    public function show($id){
       /// echo __METHOD__;
        echo $id;
    }
}