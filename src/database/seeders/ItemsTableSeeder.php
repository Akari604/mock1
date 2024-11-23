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
        $param = [
            'product_name' => '腕時計',
            'price' => '15,000',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'img_url' => 'storage/images/clock.jpeg',
            'condition' => '良好', 
        ];
        DB::table('items')->insert($param);
        $param = [
            'product_name' => 'HDD',
            'price' => '5,000',
            'description' => '高速で信頼性の高いハードディスク',
            'img_url' => 'storage/images/HDD.jpeg',
            'condition' => '目立った傷や汚れなし', 
        ];
        DB::table('items')->insert($param);
        $param = [
            'product_name' => '玉ねぎ3束',
            'price' => '300',
            'description' => '新鮮な玉ねぎ3束のセット',
            'img_url' => 'storage/images/onion.jpeg',
            'condition' => 'やや傷や汚れあり', 
        ];
        DB::table('items')->insert($param);
        $param = [
            'product_name' => '革靴',
            'price' => '4,000',
            'description' => 'クラシックなデザインの革靴',
            'img_url' => 'storage/images/shoes.jpeg',
            'condition' => '状態が悪い', 
        ];
        DB::table('items')->insert($param);
        $param = [
            'product_name' => 'ノートPC',
            'price' => '45,000',
            'description' => '高性能なノートパソコン',
            'img_url' => 'storage/images/laptop.jpeg',
            'condition' => '良好', 
        ];
        DB::table('items')->insert($param);
        $param = [
            'product_name' => 'マイク',
            'price' => '8,000',
            'description' => '高音質のレコーディング用マイク',
            'img_url' => 'storage/images/mic.jpeg',
            'condition' => '目立った傷や汚れなし', 
        ];
        DB::table('items')->insert($param);
        $param = [
            'product_name' => 'ショルダーバッグ',
            'price' => '3,500',
            'description' => 'おしゃれなショルダーバッグ',
            'img_url' => 'storage/images/bag.jpeg',
            'condition' => 'やや傷や汚れあり', 
        ];
        DB::table('items')->insert($param);
        $param = [
            'product_name' => 'タンブラー',
            'price' => '500',
            'description' => '使いやすいタンブラー',
            'img_url' => 'storage/images/tumbler.jpeg',
            'condition' => '状態が悪い', 
        ];
        DB::table('items')->insert($param);
        $param = [
            'product_name' => 'コーヒーミル',
            'price' => '4,000',
            'description' => '手動のコーヒーミル',
            'img_url' => 'storage/images/grinder.jpeg',
            'condition' => '良好', 
        ];
        DB::table('items')->insert($param);
        $param = [
            'product_name' => 'メイクセット',
            'price' => '2,500',
            'description' => '便利なメイクアップセット',
            'img_url' => 'storage/images/makeup.jpeg',
            'condition' => '目立った傷や汚れなし', 
        ];
        DB::table('authors')->insert($param);
    }
}
