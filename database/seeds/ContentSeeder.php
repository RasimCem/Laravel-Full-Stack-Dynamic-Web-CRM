<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert(
            [
                [
                    'content_name'=>'Anasayfa 1',
                    'content_title'=>'Son Teknoloji Urunler',
                    'content_text'=>'lorem lorem lorem5',
                    'content_image'=>'image'
                ],
                [
                    'content_name'=>'Anasayfa 2',
                    'content_title'=>'Son Teknoloji Urunler',
                    'content_text'=>'lorem lorem lorem5',
                    'content_image'=>'image'
                ],
                [
                    'content_name'=>'Anasayfa 3',
                    'content_title'=>'Son Teknoloji Urunler',
                    'content_text'=>'lorem lorem lorem5',
                    'content_image'=>'image'
                ],
                [
                    'content_name'=>'Anasayfa 4',
                    'content_title'=>'Son Teknoloji Urunler',
                    'content_text'=>'lorem lorem lorem5',
                    'content_image'=>'image'
                ],
                [
                    'content_name'=>'Hakkimizda',
                    'content_title'=>'Son Teknoloji Urunler',
                    'content_text'=>'lorem lorem lorem5',
                    'content_image'=>'image'
                ],
                [
                    'content_name'=>'Iletisim',
                    'content_title'=>'Son Teknoloji Urunler',
                    'content_text'=>'lorem lorem lorem5',
                    'content_image'=>'image'
                ]
            ]
        );
    }
}
