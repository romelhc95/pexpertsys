<?php

namespace Tesis\Models;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = [ 'number', 'sector', 'area', 'delete_at'];
}
