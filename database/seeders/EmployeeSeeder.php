<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        foreach(range(1,200)as $index){
            DB::table('employees')->insert([
                'employee_id' => $faker->randomDigit(),
                'employee_name' => $faker->sentence(3),
            ]);
        }
        
    }
}
