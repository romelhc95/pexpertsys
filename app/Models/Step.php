<?php
namespace Tesis\Models;

use Illuminate\Database\Eloquent\Model;

class Step extends Model

{
    public function solution(){
        return $this->belongsTo(Solution::class);
    }
}
