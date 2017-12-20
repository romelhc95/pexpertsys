<?php


namespace Tesis\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use EntrustUserTrait, SearchableTrait, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'email', 'name', 'lastname', 'password', 'gender', 'birthday', 'phone', 'mobil'
    ];

    protected $guarded = ['password'];

    protected $hidden = ['password', 'remember_token'];

    protected $dates = ['birthday', 'deleted_at'];

    protected $searchable = [
        'columns' => [
            'users.name'  => 10,
//            'name'  => 10,
            'lastname'    => 10,
            'email'       => 10,
            'states.name' => 7,
        ],
        'joins'   => [
            'states' => ['users.state_id', 'states.id'],
        ],
    ];

    public function diagnostics()
    {
        return $this->hasMany(Diagnostic::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function getFullName()
    {
        return "{$this->name} {$this->lastname}";
    }

    public function getGender()
    {
        if ($this->gender == 1) {
            return 'M';
        }
        return 'F';
    }

    public function getGenderColored()
    {
        if ($this->gender == 1) {
            return '<span class="label label-primary">' . trans('messages.gender.male') . '</span>';
        }
        return '<span class="label label-danger">' . trans('messages.gender.female') . '</span>';
    }

    public function setPassword($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
    public function setBirthdayAttribute($birthday)
    {
        $this->attributes['birthday'] = Carbon::createFromFormat('d/m/Y', $birthday)->format('Y-m-d');
    }

    /**
     * @param $roles
     * @return bool
     */
    public function authorizeRole($roles)
    {
        if($this->hasAnyRole($roles)){
            return true;
        }
        abort(401, 'Esta acción no esta autorizada.');
    }

    /**
     * @param $roles
     * @return bool
     */
    public function hasAnyRole($roles)
    {
        if(is_array($roles)){
            foreach ($roles as $role){
                if($this->hasRole($role)){
                    return true;
                }
            }
        }
        else{
            if($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }
}
