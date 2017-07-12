<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    //protected $table = 'users';
    protected $table = 'usuarios';
    protected $primaryKey = "name";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','nombres', 'apellidos', 'email','rol','password', 'estado', 'idClub'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function club()//ok 0
    {
        return $this->belongsTo('App\Club','idClub');
    }

     /*public function evento()//ok 0

    {
      return $this->belongsToMany('App\Evento','usuario_eventos','name','Idevento');
    }*/

  
     public function tarea()//ok 0
    {
        return $this->belongsToMany('App\Tarea','tarea_usuarios','name','IdTarea');
    }



    public function scopeBuscar($query, $name)
    {
        return $query->where('name', 'LIKE', "%$name%");
    }
}
