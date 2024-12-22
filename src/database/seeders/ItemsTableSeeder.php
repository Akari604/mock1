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
                'brand_name' => 'EMPORIO ARMANI',
                'price' => '15000',
                'description' => 'スタイリッシュなデザインのメンズ腕時計',
                'img_url' => 'storage/images/clock.jpeg',
            ],
            [
                'product_name' => 'HDD',
                'brand_name' => 'BUFFALO',
                'price' => '5000',
                'description' => '高速で信頼性の高いハードディスク',
                'img_url' => 'storage/images/HDD.jpeg',
            ],
            [
                'product_name' => '玉ねぎ3束',
                'brand_name' => 'はなたま',
                'price' => '300',
                'description' => '新鮮な玉ねぎ3束のセット',
                'img_url' => 'storage/images/onion.jpeg',
            ],
            [
                'product_name' => '革靴',
                'brand_name' => 'PRADA',
                'price' => '4000',
                'description' => 'クラシックなデザインの革靴',
                'img_url' => 'storage/images/shoes.jpeg',
            ],
            [
                'product_name' => 'ノートPC',
                'brand_name' => 'Microsoft',
                'price' => '45000',
                'description' => '高性能なノートパソコン',
                'img_url' => 'storage/images/laptop.jpeg',
            ],
            [
                'product_name' => 'マイク',
                'brand_name' => 'Sennheiser',
                'price' => '8000',
                'description' => '高音質のレコーディング用マイク',
                'img_url' => 'storage/images/mic.jpeg',
            ],
            [
                'product_name' => 'ショルダーバッグ',
                'brand_name' => 'COACH',
                'price' => '3500',
                'description' => 'おしゃれなショルダーバッグ',
                'img_url' => 'storage/images/bag.jpeg', 
            ],
            [
                'product_name' => 'タンブラー',
                'brand_name' => 'THERMOS',
                'price' => '500',
                'description' => '使いやすいタンブラー',
                'img_url' => 'storage/images/tumbler.jpeg',
            ],
            [
                'product_name' => 'コーヒーミル',
                'brand_name' => 'PEUGEOT',
                'price' => '4000',
                'description' => '手動のコーヒーミル',
                'img_url' => 'storage/images/grinder.jpeg',
            ],
            [
                'product_name' => 'メイクセット',
                'brand_name' => 'Dior',
                'price' => '2500',
                'description' => '便利なメイクアップセット',
                'img_url' => 'storage/images/makeup.jpeg',
            ],
        ]);
    }
}
