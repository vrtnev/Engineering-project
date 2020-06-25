<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'category_id' => '1',
                'name' => 'Apple iPhone 11 Pro Max 256 ГБ тёмно-зелёный',
                'code' => 'iphone-11-pro-max-256-midnight-green',
                'description' => 'Apple возвращается с тремя новыми iPhone - ежегодная церемония повторяется. Самым большим и увесистым среди новинок является iPhone 11 Pro Max - в первую очередь он будет интересен тем, кому нравятся экраны побольше и высококачественные камеры.',
                'price' => '113990'
            ],
            [
                'category_id' => '2',
                'name' => 'Apple iPad Pro (2020) 12,9" Wi-Fi + Cellular 128 ГБ, «серый космос»',
                'code' => 'ipad-pro-2020-12.9-cellular-128-space-gray',
                'description' => 'Ваш будущий компьютер теперь не компьютер.Он быстрее многих ноутбуков. У него камеры уровня Pro и сканер LiDAR. А ещё им можно управлять с помощью трекпада.',
                'price' => '100990'
            ],
            [
                'category_id' => '3',
                'name' => 'Наушники AirPods Pro',
                'code' => 'airpods-pro',
                'description' => 'Это наушники совершенно нового класса. AirPods Pro исключительно комфортны, в них реализована технология активного шумоподавления, и можно даже выбрать вкладыши своего размера. Вы будете лучше чувствовать музыку, а не наушники.',
                'price' => '19990'
            ]
        ]);
    }
}
