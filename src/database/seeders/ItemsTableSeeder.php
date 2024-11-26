<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'product_name' => '腕時計',
                'price' => '15000',
                'description' => 'スタイリッシュなデザインのメンズ腕時計',
                'img_url' => 'storage/images/clock.jpeg',
                'condition' => '良好', 
            ],
            [
                'product_name' => 'HDD',
                'price' => '5000',
                'description' => '高速で信頼性の高いハードディスク',
                'img_url' => 'storage/images/HDD.jpeg',
                'condition' => '目立った傷や汚れなし', 
            ],
            [
                'product_name' => '玉ねぎ3束',
                'price' => '300',
                'description' => '新鮮な玉ねぎ3束のセット',
                'img_url' => 'storage/images/onion.jpeg',
                'condition' => 'やや傷や汚れあり', 
            ],
            [
                'product_name' => '革靴',
                'price' => '4000',
                'description' => 'クラシックなデザインの革靴',
                'img_url' => 'storage/images/shoes.jpeg',
                'condition' => '状態が悪い', 
            ],
            [
                'product_name' => 'ノートPC',
                'price' => '45000',
                'description' => '高性能なノートパソコン',
                'img_url' => 'storage/images/laptop.jpeg',
                'condition' => '良好', 
            ],
            [
                'product_name' => 'マイク',
                'price' => '8000',
                'description' => '高音質のレコーディング用マイク',
                'img_url' => 'storage/images/mic.jpeg',
                'condition' => '目立った傷や汚れなし', 
            ],
            [
                'product_name' => 'ショルダーバッグ',
                'price' => '3500',
                'description' => 'おしゃれなショルダーバッグ',
                'img_url' => 'storage/images/bag.jpeg',
                'condition' => 'やや傷や汚れあり', 
            ],
            [
                'product_name' => 'タンブラー',
                'price' => '500',
                'description' => '使いやすいタンブラー',
                'img_url' => 'storage/images/tumbler.jpeg',
                'condition' => '状態が悪い', 
            ],
            [
                'product_name' => 'コーヒーミル',
                'price' => '4000',
                'description' => '手動のコーヒーミル',
                'img_url' => 'storage/images/grinder.jpeg',
                'condition' => '良好', 
            ],
            [
                'product_name' => 'メイクセット',
                'price' => '2500',
                'description' => '便利なメイクアップセット',
                'img_url' => 'storage/images/makeup.jpeg',
                'condition' => '目立った傷や汚れなし', 
            ],
        ]);
    }
}