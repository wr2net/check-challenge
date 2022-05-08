<?php

namespace App\Cakes\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cake extends Model
{
    use SoftDeletes;
}
