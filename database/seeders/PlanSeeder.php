<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [

            // =========================
            // BASIC PLAN
            // =========================
            [
                'name' => 'Basic',
                'price' => 29.99,
                'billing_cycle' => 'monthly',
                'max_students' => 200,
                'max_teachers' => 20,
                'max_staff' => 10,
                'features' => json_encode([
                    'student_management',
                    'teacher_management',
                    'attendance_management',
                    'basic_reports',
                ]),
            ],

            // =========================
            // STANDARD PLAN
            // =========================
            [
                'name' => 'Standard',
                'price' => 79.99,
                'billing_cycle' => 'monthly',
                'max_students' => 1000,
                'max_teachers' => 100,
                'max_staff' => 50,
                'features' => json_encode([
                    'student_management',
                    'teacher_management',
                    'attendance_management',
                    'exam_management',
                    'accounting_management',
                    'parent_portal',
                    'sms_notifications',
                    'advanced_reports',
                ]),
            ],

            // =========================
            // PREMIUM PLAN
            // =========================
            [
                'name' => 'Premium',
                'price' => 199.99,
                'billing_cycle' => 'monthly',
                'max_students' => null,
                'max_teachers' => null,
                'max_staff' => null,
                'features' => json_encode([
                    'student_management',
                    'teacher_management',
                    'attendance_management',
                    'exam_management',
                    'accounting_management',
                    'parent_portal',
                    'sms_notifications',
                    'advanced_reports',
                    'live_classes',
                    'library_management',
                    'hostel_management',
                    'transport_management',
                    'api_access',
                    'custom_domain',
                    'priority_support',
                ]),
            ],

            // =========================
            // YEARLY PREMIUM
            // =========================
            [
                'name' => 'Premium Yearly',
                'price' => 1999.99,
                'billing_cycle' => 'yearly',
                'max_students' => null,
                'max_teachers' => null,
                'max_staff' => null,
                'features' => json_encode([
                    'student_management',
                    'teacher_management',
                    'attendance_management',
                    'exam_management',
                    'accounting_management',
                    'parent_portal',
                    'sms_notifications',
                    'advanced_reports',
                    'live_classes',
                    'library_management',
                    'hostel_management',
                    'transport_management',
                    'api_access',
                    'custom_domain',
                    'priority_support',
                ]),
            ],
        ];

        foreach ($plans as $plan) {
            DB::table('plans')->updateOrInsert(
                [
                    'name' => $plan['name'],
                    'billing_cycle' => $plan['billing_cycle'],
                ],
                [
                    'price' => $plan['price'],
                    'max_students' => $plan['max_students'],
                    'max_teachers' => $plan['max_teachers'],
                    'max_staff' => $plan['max_staff'],
                    'features' => $plan['features'],
                    'is_active' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
