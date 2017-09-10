<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * @package App\Models
 * @version September 9, 2017, 10:53 am UTC
 *
 * @property integer customer_id
 * @property string order_date
 * @property decimal order_amount
 * @property string order_status
 */
class Order extends Model
{
    use SoftDeletes;

    public $table = 'orders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'customer_id',
        'order_date',
        'order_amount',
        'order_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'customer_id' => 'integer',
        'order_date' => 'string',
        'order_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer_id' => 'required',
        'order_date' => 'required',
        'order_amount' => 'required',
        'order_status' => 'required'
    ];

    public function customer (){
        return $this->belongsTo(Customer::class);
    }

}
