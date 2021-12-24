<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    public $table = 'orders';
    protected $primaryKey = 'order_id';
    public $guarded = ['order_id'];

    const statuses = ['Pending', 'Approve','Reject','Delivered'];

    public function detailsOrder()
    {
        return $this->hasMany(DetailsOrder::class, 'order_id','order_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id')->select(['user_id','name']);
    }
}
