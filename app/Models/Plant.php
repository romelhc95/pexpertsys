<?php

namespace Tesis\Models;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = [ 'code', 'sector', 'area', 'delete_at'];
}
