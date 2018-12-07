<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test')->insert([
            'test_title'=>'The frist',
            'test_desc'=>'this is a website page.',
            'test_email'=>'860900086@qq.com',
            'test_text'=>'this is a website page.'
        ]);
    }
}
