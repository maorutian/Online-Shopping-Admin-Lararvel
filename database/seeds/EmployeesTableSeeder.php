<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 20;
        $data = [];
        for ($i = 0; $i < $limit; $i++) {
            $data[] = [
                'email' => $faker->email,
                'password' => bcrypt('admin123'),
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'created_at' => date('Y-m-d H:i:s', time()),
            ];
        }
        DB::table('employees')->insert($data);
    }
}
