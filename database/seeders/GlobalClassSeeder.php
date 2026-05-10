<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlobalClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [

            // Pre-primary
            [
                'name' => 'Nursery',
                'numeric_value' => 0,
                'has_groups' => false,
            ],

            [
                'name' => 'KG',
                'numeric_value' => 0,
                'has_groups' => false,
            ],

            // Primary
            [
                'name' => 'Class One',
                'numeric_value' => 1,
                'has_groups' => false,
            ],

            [
                'name' => 'Class Two',
                'numeric_value' => 2,
                'has_groups' => false,
            ],

            [
                'name' => 'Class Three',
                'numeric_value' => 3,
                'has_groups' => false,
            ],

            [
                'name' => 'Class Four',
                'numeric_value' => 4,
                'has_groups' => false,
            ],

            [
                'name' => 'Class Five',
                'numeric_value' => 5,
                'has_groups' => false,
            ],

            // Secondary
            [
                'name' => 'Class Six',
                'numeric_value' => 6,
                'has_groups' => false,
            ],

            [
                'name' => 'Class Seven',
                'numeric_value' => 7,
                'has_groups' => false,
            ],

            [
                'name' => 'Class Eight',
                'numeric_value' => 8,
                'has_groups' => false,
            ],

            [
                'name' => 'Class Nine',
                'numeric_value' => 9,
                'has_groups' => true,
            ],

            [
                'name' => 'Class Ten',
                'numeric_value' => 10,
                'has_groups' => true,
            ],

            // Higher Secondary
            [
                'name' => 'Class Eleven',
                'numeric_value' => 11,
                'has_groups' => true,
            ],

            [
                'name' => 'Class Twelve',
                'numeric_value' => 12,
                'has_groups' => true,
            ],
        ];

        foreach ($classes as $class) {
            DB::table('global_classes')->updateOrInsert(
                ['name' => $class['name']],
                [
                    'numeric_value' => $class['numeric_value'],
                    'has_groups' => $class['has_groups'],
                    'is_active' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
