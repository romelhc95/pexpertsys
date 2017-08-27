<?php

namespace Tesis\Models;

use Illuminate\Database\Eloquent\Model;
class Type extends Model
{
    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
}
