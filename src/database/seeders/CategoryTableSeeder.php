<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            "",
            "目立った傷や汚れなし",
            "やや傷や汚れあり",
            "状態が悪い"
        ];

        foreach ($contents as $content) {
            DB::table('categories')->insert([
                'content' => $content,
            ]);
        }
    }
}
