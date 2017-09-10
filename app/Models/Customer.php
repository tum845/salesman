<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package App\Models
 * @version September 9, 2017, 9:43 am UTC
 *
 * @property string customer_company_name
 * @property string customer_address
 * @property string customer_province
 * @property string customer_city
 * @property string customer_postal_code
 * @property string customer_lat
 * @property string customer_lng
 * @property string customer_name
 * @property string customer_phone
 * @property string customer_mobile
 * @property string customer_email
 * @property string customer_note
 */
class Customer extends Model
{
    use SoftDeletes;

    public $table = 'customers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'customer_company_name',
        'customer_address',
        'customer_province',
        'customer_city',
        'customer_postal_code',
        'customer_lat',
        'customer_lng',
        'customer_name',
        'customer_phone',
        'customer_mobile',
        'customer_email',
        'customer_note'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'customer_company_name' => 'string',
        'customer_address' => 'string',
        'customer_province' => 'string',
        'customer_city' => 'string',
        'customer_postal_code' => 'string',
        'customer_lat' => 'string',
        'customer_lng' => 'string',
        'customer_name' => 'string',
        'customer_phone' => 'string',
        'customer_mobile' => 'string',
        'customer_email' => 'string',
        'customer_note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer_company_name' => 'required|min:4',
        'customer_address' => 'required',
        'customer_province' => 'required',
        'customer_city' => 'required',
        'customer_postal_code' => 'required',
        'customer_name' => 'required',
        'customer_phone' => 'required',
        'customer_email' => 'required'
    ];

    public function order (){
        return $this->hasMany(Order::class);
    }
}
