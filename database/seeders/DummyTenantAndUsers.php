<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tenant;
use App\Models\User;

class DummyTenantAndUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Tenant 1
        $tenant1 = Tenant::create([
            'id' => 'foo',
            'name' => 'Foo School',
            'plan' => 'free',
            'status' => 'active',
            'other' => 'foo',
            'logo' => 'foo.png'
        ]);
        $tenant1->domains()->create([
            'domain' => 'foo.localhost',
        ]);

        // Create Tenant 2
        $tenant2 = Tenant::create([
            'id' => 'bar',
            'name' => 'Bar School',
            'plan' => 'pro',
            'status' => 'active',
            'other' => 'foo',
            'logo' => 'foo.png'
        ]);
        $tenant2->domains()->create([
            'domain' => 'bar.localhost',
        ]);

        // Create users for each tenant
        Tenant::all()->runForEach(function () {
            // User::factory()->create();
            User::factory(5)->create();
        });
    }
}
