<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\customer_satisfaction;


class customer_satisfaction_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        customer_satisfaction::factory()->count(145)->create(); // Generates 50 customers
    }
}
