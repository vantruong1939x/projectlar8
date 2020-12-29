<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class product_order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_order')->delete();
        DB::table('product_order')->insert([
            ['code'=>'SP01','name'=>'Áo Nữ Sơ Mi sexxy','price'=>50000,'quantity'=>1,'img'=>'Ao_nu_so_mi_sexy.jpg','order_id'=>1],
            ['code'=>'SP02','name'=>'Áo Nữ Có Viền','price'=>60000,'quantity'=>1,'img'=>'ao-nu-co-vien.jpg','order_id'=>1],
            ['code'=>'SP01','name'=>'Áo Nữ Sơ Mi sexxy','price'=>50000,'quantity'=>1,'img'=>'Ao_nu_so_mi_sexy.jpg','order_id'=>2],
            ['code'=>'SP02','name'=>'Áo Nữ Có Viền','price'=>60000,'quantity'=>1,'img'=>'ao-nu-co-vien.jpg','order_id'=>2],
            ['code'=>'SP01','name'=>'Áo Nữ Sơ Mi sexxy','price'=>50000,'quantity'=>1,'img'=>'Ao_nu_so_mi_sexy.jpg','order_id'=>3],
            ['code'=>'SP02','name'=>'Áo Nữ Có Viền','price'=>60000,'quantity'=>1,'img'=>'ao-nu-co-vien.jpg','order_id'=>3],
            ['code'=>'SP01','name'=>'Áo Nữ Sơ Mi sexxy','price'=>50000,'quantity'=>1,'img'=>'Ao_nu_so_mi_sexy.jpg','order_id'=>4],
            ['code'=>'SP02','name'=>'Áo Nữ Có Viền','price'=>60000,'quantity'=>1,'img'=>'ao-nu-co-vien.jpg','order_id'=>4],
            ['code'=>'SP01','name'=>'Áo Nữ Sơ Mi sexxy','price'=>50000,'quantity'=>1,'img'=>'Ao_nu_so_mi_sexy.jpg','order_id'=>5],
            ['code'=>'SP02','name'=>'Áo Nữ Có Viền','price'=>60000,'quantity'=>1,'img'=>'ao-nu-co-vien.jpg','order_id'=>5],
        ]);
    }
}
