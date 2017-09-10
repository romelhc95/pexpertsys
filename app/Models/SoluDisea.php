<?php

namespace Tesis\Models;

use Illuminate\Database\Eloquent\Model;

class SoluDisea extends Model
{
    protected $fillable = ['number', 'disease_id', 'solution_id'];

    public function disease()
    {
        return $this->belongsTo(Disease::class, 'disease_id');
    }

    public function solution()
    {
        return $this->belongsTo(Solution::class, 'solution_id');
    }

}
