<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Chocolate Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'Red Velvet Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'Foam Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'Chiffon Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'Baked Flourless Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'Unbaked Flourless Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'American-Style Butter Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'Pound Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'Carrot Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'Sponge Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'Birthday Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'Wedding Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'Baby Shower Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'Speciality Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        DB::table('categories')->insert([
            'name' => 'Cheese Cake',
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);



    }
}
