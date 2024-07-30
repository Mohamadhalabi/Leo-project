<?php

namespace App\Rules\Backend\Seller;

use App\Models\SellerCommission;
use Illuminate\Contracts\Validation\Rule;

class CheckToRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    private $seller_id;

    public function __construct($seller_id)
    {
        $this->seller_id = $seller_id;
    }
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        $check = SellerCommission::query()
            ->where('to', '>=', $value)
            ->where('from', '<=',$value)
            ->where('seller_id', $this->seller_id)
            ->count();
        return  !$check;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('backend.seller.you_cant_add_commission_because_it_already_exists');
    }
}
