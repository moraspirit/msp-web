<?php
/**
 * Created by PhpStorm.
 * User: Tharindu Diluksha
 * Date: 5/9/2016
 * Time: 9:55 AM
 */

namespace app;

use Jenssegers\Mongodb\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;


class Sport extends Eloquent
{
    protected  $connection ="mongodb";
    protected $collection = 'test';

}