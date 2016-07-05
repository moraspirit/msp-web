<?php

namespace app\Entity;

use Jenssegers\Mongodb\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;

class Points extends Eloquent{

    protected  $connection ="mongodb";
    protected $collection = 'events';
}