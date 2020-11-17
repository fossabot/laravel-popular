<?php

namespace Turahe\LaravelPopular\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Visit
 * @package Turahe\LaravelPopular\Models
 */
class Visit extends Model
{
    protected $fillable = ['ip', 'date', 'model_id', 'model_type'];
}
