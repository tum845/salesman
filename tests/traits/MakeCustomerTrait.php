<?php

use Faker\Factory as Faker;
use App\Models\Customer;
use App\Repositories\CustomerRepository;

trait MakeCustomerTrait
{
    /**
     * Create fake instance of Customer and save it in database
     *
     * @param array $customerFields
     * @return Customer
     */
    public function makeCustomer($customerFields = [])
    {
        /** @var CustomerRepository $customerRepo */
        $customerRepo = App::make(CustomerRepository::class);
        $theme = $this->fakeCustomerData($customerFields);
        return $customerRepo->create($theme);
    }

    /**
     * Get fake instance of Customer
     *
     * @param array $customerFields
     * @return Customer
     */
    public function fakeCustomer($customerFields = [])
    {
        return new Customer($this->fakeCustomerData($customerFields));
    }

    /**
     * Get fake data of Customer
     *
     * @param array $postFields
     * @return array
     */
    public function fakeCustomerData($customerFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'customer_company_name' => $fake->word,
            'customer_address' => $fake->word,
            'customer_province' => $fake->word,
            'customer_city' => $fake->word,
            'customer_postal_code' => $fake->word,
            'customer_lat' => $fake->word,
            'customer_lng' => $fake->word,
            'customer_name' => $fake->word,
            'customer_phone' => $fake->word,
            'customer_mobile' => $fake->word,
            'customer_email' => $fake->word,
            'customer_note' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $customerFields);
    }
}
