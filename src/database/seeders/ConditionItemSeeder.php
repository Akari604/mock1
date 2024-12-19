<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConditionItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condition_item')->insert([
            [
                'condition_id' => '1',
                'item_id' => '1',
            ],
            [
                'condition_id' => '2',
                'item_id' => '2',
            ],
            [
                'condition_id' => '3',
                'item_id' => '3',
            ],
            [
                'condition_id' => '4',
                'item_id' => '4',
            ],
            [
                'condition_id' => '1',
                'item_id' => '5',
            ],
            [
                'condition_id' => '2',
                'item_id' => '6',
            ],
            [
                'condition_id' => '3',
                'item_id' => '7',
            ],
            [
                'condition_id' => '4',
                'item_id' => '8',
            ],
            [
                'condition_id' => '1',
                'item_id' => '9',
            ],
            [
                'condition_id' => '2',
                'item_id' => '10',
            ],
        ]);
    }
}
