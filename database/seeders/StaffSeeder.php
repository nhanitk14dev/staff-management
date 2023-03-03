<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedCount = (int) $this->command->ask('How many "staff" seeds would you like to create?', 50);
        Staff::factory($seedCount)->create();
    }
}
