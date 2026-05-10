<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $designations = [
            [
                'name' => 'Principal',
                'code' => 'PRINCIPAL',
            ],
            [
                'name' => 'Vice Principal',
                'code' => 'VICE_PRINCIPAL',
            ],
            [
                'name' => 'Senior Teacher',
                'code' => 'SENIOR_TEACHER',
            ],
            [
                'name' => 'Assistant Teacher',
                'code' => 'ASSISTANT_TEACHER',
            ],
            [
                'name' => 'Accountant',
                'code' => 'ACCOUNTANT',
            ],
            [
                'name' => 'Librarian',
                'code' => 'LIBRARIAN',
            ],
            [
                'name' => 'Office Assistant',
                'code' => 'OFFICE_ASSISTANT',
            ],
        ];

        foreach ($designations as $designation) {
            DB::table('designations')->updateOrInsert(
                ['code' => $designation['code']],
                [
                    'name' => $designation['name'],
                    'is_active' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
