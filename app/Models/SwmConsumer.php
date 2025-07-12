<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SwmConsumer extends Model
{
    use HasFactory;

    protected $table = 'swm_consumers';

    protected $fillable = [
        'ward_no',
        'name',
        'holding_no',
        'mobile_no',
        'address',
        'consumer_category_id',
        'consumer_type_id',
        'owner_id',
        'consumer_no',
        'pincode',
        'user_id',
        'entry_date',
        'is_deactivate',
        'license_no',
        'firm_name',
        'stampdate',
        'ulb_id',
        'apartment_id',
        'is_default',
    ];

    protected $casts = [
        'is_deactivate' => 'boolean',
        'is_default' => 'boolean',
        'entry_date' => 'date',
        'stampdate' => 'datetime',
    ];
}
