<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('order')->delete();
        DB::table('order')->insert(
            [
                ['id'=>1,'full'=>'Nguyễn Văn A','address'=>'Bắc Cạn','email'=>'vana@gmail.com','phone'=>'0987654321','total'=>110000,'state'=>1],
                ['id'=>2,'full'=>'Nguyễn Văn B','address'=>'Bắc Ninh','email'=>'vanb@gmail.com','phone'=>'0987654322','total'=>110000,'state'=>1],
                ['id'=>3,'full'=>'Nguyễn Văn C','address'=>'Bắc Đông','email'=>'vanc@gmail.com','phone'=>'0987654323','total'=>110000,'state'=>2],
                ['id'=>4,'full'=>'Nguyễn Văn D','address'=>'Bắc Tây','email'=>'vand@gmail.com','phone'=>'0987654324','total'=>110000,'state'=>2],
                ['id'=>5,'full'=>'Nguyễn Văn E','address'=>'Bắc Bếp','email'=>'vane@gmail.com','phone'=>'0987654325','total'=>110000,'state'=>2]
            ]
        );
    }
}
