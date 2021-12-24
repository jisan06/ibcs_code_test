<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Laravelista\Comments\Commentable;
use willvincent\Rateable\Rateable;

/**
 * Class Product
 * @package App\Models
 * @version January 24, 2020, 3:37 pm +0330
 *
 * @property \Illuminate\Database\Eloquent\Collection orders
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer product_id
 * @property string product_name
 * @property string sku
 * @property integer price
 * @property integer quantity
 * @property string description
 * @property string image
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';

    protected $primaryKey = 'product_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];



    public $guarded = ['id'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'product_name' => 'string',
        'sku' => 'string',
        'price' => 'integer',
        'quantity' => 'integer',
        'description' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'required',
        'sku' => 'required',
        'price' => 'required',
        'quantity' => 'required',
        'description' => 'required',
        'image' => 'required'
    ];
}
