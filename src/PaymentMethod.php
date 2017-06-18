<?php

namespace smnbst\pmm;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table = 'tbl_payment_methods';
    protected $fillable = ['c_code','c_description','c_status'];
}
