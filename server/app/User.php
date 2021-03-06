<?php

namespace App;

use App\Models\Order;
use App\Models\Product;
use App\Models\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable ,HasRoles;
    /**
     * The primary key.
     *
     * @var array
     */
    protected $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','google_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * ORDERS REL many to many
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function orders()
    {
        return $this->hasMany(Order::class,'user_id')->with('detailsOrder','address');
    }


    /**
     * CHECK USER ACTIVITY WITH MIDDLEWARE ADN THIS FUNC
     * @return bool
     */
    public function isOnline()
    {
        return Cache::has('user-is-online'.  $this->user_id);
    }

    /**
     * favorite REL belongsToMany
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function favorites()
    {
        return $this->belongsToMany(Product::class,'favorites','user_id','product_id');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
