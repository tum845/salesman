<?php

namespace App\Repositories;

use App\Models\Customer;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CustomerRepository
 * @package App\Repositories
 * @version September 9, 2017, 9:43 am UTC
 *
 * @method Customer findWithoutFail($id, $columns = ['*'])
 * @method Customer find($id, $columns = ['*'])
 * @method Customer first($columns = ['*'])
*/
class CustomerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Customer::class;
    }
}
