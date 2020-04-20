<?php

use Illuminate\Database\Seeder;

class personTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now=date('Y-m-d H:i:s' ,strtotime('now'));
    DB::table('_person')->insert([
        'Name'=> 'ALi',
    'created_at'=>$now,
    'updated_at'=>$now,
]);

    
    }
}
