<?php

namespace Turahe\LaravelPopular\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = ['ip', 'date', 'model_id', 'model_type'];
}
