<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        DB::table('users')->insert([
            ['id'=>1,'email'=>'admin@gmail.com','password'=>bcrypt('123456'),'full'=>'admin','address'=>'hà Nam','phone'=>'0987654321','level'=>1],
            ['id'=>2,'email'=>'admin2@gmail.com','password'=>bcrypt('123456'),'full'=>'admin số 2','address'=>'Hà Nội','phone'=>'0987654322','level'=>2],
            ['id'=>3,'email'=>'admin3@gmail.com','password'=>bcrypt('123456'),'full'=>'admin số 3','address'=>'Hà Tây','phone'=>'0987654323','level'=>1],
            ['id'=>4,'email'=>'admin4@gmail.com','password'=>bcrypt('123456'),'full'=>'admin số 4','address'=>'Hà Đông','phone'=>'0987654324','level'=>2],
        ]);
    }
}
