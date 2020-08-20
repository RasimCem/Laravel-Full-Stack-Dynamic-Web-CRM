<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
            [
                [
                    'settings_name'=>'Sirket Ismi',
                    'settings_content'=>'Aytan Software',
                    'settings_status'=>'1',
                    'settings_type'=>'text'
                ],
                [
                    'settings_name'=>'Logo',
                    'settings_content'=>'',
                    'settings_status'=>'1',
                    'settings_type'=>'file'
                ],
                [
                    'settings_name'=>'CellPhone',
                    'settings_content'=>'0533 840 18 35',
                    'settings_status'=>'1',
                    'settings_type'=>'text'
                ],
                [
                    'settings_name'=>'Phone',
                    'settings_content'=>'322 526 35 65',
                    'settings_status'=>'1',
                    'settings_type'=>'text'
                ],
                [
                    'settings_name'=>'Mail',
                    'settings_content'=>'cemaytan@hotmail.com',
                    'settings_status'=>'1',
                    'settings_type'=>'text'
                ],
                [
                    'settings_name'=>'Adress',
                    'settings_content'=>'ADANA BUYUK SEHIR BELEDIYESI',
                    'settings_status'=>'1',
                    'settings_type'=>'textarea'
                ],
                [
                    'settings_name'=>'facebook',
                    'settings_content'=>'facebook linki',
                    'settings_status'=>'1',
                    'settings_type'=>'text'
                ],
                [
                    'settings_name'=>'twitter',
                    'settings_content'=>'twitter linki',
                    'settings_status'=>'1',
                    'settings_type'=>'text'
                ],
                [
                    'settings_name'=>'linkedin',
                    'settings_content'=>'linkedin linki',
                    'settings_status'=>'1',
                    'settings_type'=>'text'
                ]
              
            
            ]
        );
    }
}
