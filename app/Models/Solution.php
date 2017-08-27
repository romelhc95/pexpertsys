<?php
/**
 * Created by PhpStorm.
 * User: NigthKing
 * Date: 26/07/2017
 * Time: 10:47
 */

namespace Tesis\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nicolaslopezj\Searchable\SearchableTrait;

class Solution extends Model
{
    use SearchableTrait, SoftDeletes;

    protected $fillable = ['steps_id', 'description', 'deleted_at'];

    protected $searchable = [
        'columns' => [
            'description' => 20,
        ],
    ];

    public function solu_diseas(){
        return $this->belongsToMany('Tesis\Models\Disease', 'solu_diseas')->withTimestamps();
    }

    public function step(){
        return $this->belongsTo(Step::class);
    }
//    public function diseases()
//    {
//        return $this->belongsToMany('Tesis\Models\Disease', 'diseases')->withTimestamps();
//    }

    public function setNameAttribute($description)
    {
        $this->attributes['description'] = ucfirst($description);
    }
}