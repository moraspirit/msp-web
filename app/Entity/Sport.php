<?php
/**
 * Created by PhpStorm.
 * User: Tharindu Diluksha
 * Date: 6/21/2016
 * Time: 11:59 AM
 */

namespace app\Entity;

use Jenssegers\Mongodb\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;


class Sport extends Eloquent
{
    protected  $connection ="mongodb";
    protected $collection = 'sports';
}