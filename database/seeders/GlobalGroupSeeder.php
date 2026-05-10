<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlobalGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            [
                'name' => 'Science',
            ],
            [
                'name' => 'Arts',
            ],
            [
                'name' => 'Commerce',
            ],
        ];

        foreach ($groups as $group) {
            DB::table('global_groups')->updateOrInsert(
                ['name' => $group['name']],
                [
                    'is_active' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
