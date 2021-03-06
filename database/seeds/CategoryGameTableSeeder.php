<?php

use Illuminate\Database\Seeder;

class CategoryGameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_game')->insert([
            'category_id' => 3,
            'game_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_game')->insert([
            'category_id' => 2,
            'game_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_game')->insert([
            'category_id' => 3,
            'game_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_game')->insert([
            'category_id' => 5,
            'game_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_game')->insert([
            'category_id' => 1,
            'game_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_game')->insert([
            'category_id' => 2,
            'game_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_game')->insert([
            'category_id' => 2,
            'game_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_game')->insert([
            'category_id' => 3,
            'game_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_game')->insert([
            'category_id' => 2,
            'game_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_game')->insert([
            'category_id' => 3,
            'game_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_game')->insert([
            'category_id' => 3,
            'game_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_game')->insert([
            'category_id' => 4,
            'game_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_game')->insert([
            'category_id' => 6,
            'game_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_game')->insert([
            'category_id' => 2,
            'game_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
