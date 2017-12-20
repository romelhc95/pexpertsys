<?php

namespace Tesis\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nicolaslopezj\Searchable\SearchableTrait;

class Plant extends Model
{
    use SearchableTrait, SoftDeletes;

    protected $table = 'plants';

    protected $fillable = [ 'codeplant', 'area', 'user_id', 'delete_at'];

    protected $searchable = [
        'columns' => [
            'plants.codeplant' => 20,
            'plants.area' => 20,
        ],
        'joins'   => [
            'users' => ['plants.user_id', 'users.id'],
        ],
    ];

    public function diagnostics()
    {
        return $this->hasMany(Diagnostic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function setNameAttribute($area)
    {
        $this->attributes['area'] = ucfirst($area);
    }
}
