<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenantDetail extends Model
{
    protected $fillable = [
        'tenant_id',
        'school_name',
        'school_code',
        'email',
        'phone',
        'website',
        'address',
        'city',
        'state',
        'country',
        'postal_code',
        'logo',
        'timezone',
        'currency',
        'language',
        'established_year',
        'principal_name',
        'description',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
