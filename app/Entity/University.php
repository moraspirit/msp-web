<?php
/**
 * Created by PhpStorm.
 * User: Tharindu Diluksha
 * Date: 6/21/2016
 * Time: 12:03 PM
 */

namespace app\Entity;

use Jenssegers\Mongodb\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;


class University extends Eloquent
{
    protected  $connection ="mongodb";
    protected $collection = 'universities';
}