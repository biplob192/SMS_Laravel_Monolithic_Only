<?php

use App\Providers\AppServiceProvider;

return [
    AppServiceProvider::class,
    App\Providers\TenancyServiceProvider::class,
    Spatie\Permission\PermissionServiceProvider::class, // This added manually
];
