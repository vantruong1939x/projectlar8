<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->delete();
        DB::table('product')->insert([
            ['id'=>1,'code'=>'SP01','name'=>'Áo Nữ Sơ Mi sexxy','slug'=>'ao-nu-so-mi-sexy','price'=>50000,'featured'=>1,'state'=>1,'img'=>'Ao_nu_so_mi_sexy.jpg','category_id'=>6],
            ['id'=>2,'code'=>'SP02','name'=>'Áo Nữ Có Viền','slug'=>'ao-nu-co-vien','price'=>60000,'featured'=>1,'state'=>0,'img'=>'ao-nu-co-vien.jpg','category_id'=>6],
            ['id'=>3,'code'=>'SP03','name'=>'Áo Sơ Mi Có Cổ','slug'=>'ao-so-mi-co-co','price'=>70000,'featured'=>0,'state'=>1,'img'=>'ao-nu-so-mi-co-co.jpg','category_id'=>6],
            ['id'=>4,'code'=>'SP04','name'=>'Áo sơ mi caro','slug'=>'ao-so-mi-caro','price'=>80000,'featured'=>0,'state'=>1,'img'=>'ao-so-mi-ca-ro.jpg','category_id'=>2],
            ['id'=>5,'code'=>'SP05','name'=>'Áo Sơ Mi Hoạ Tiết','slug'=>'ao-so-mi-hoa-tiet','price'=>90000,'featured'=>0,'state'=>1,'img'=>'ao-so-mi-hoa-tiet.jpg','category_id'=>2],
            ['id'=>6,'code'=>'SP06','name'=>'Áo Sơ Mi Trắng Kem','slug'=>'ao-so-mi-trang-kem','price'=>100000,'featured'=>1,'state'=>1,'img'=>'ao-so-mi-trang-kem-asm836-8193.jpg','category_id'=>2],
            ['id'=>7,'code'=>'SP07','name'=>'Quần kaki Xanh Nam','slug'=>'quan-kaki-xanh-nam','price'=>110000,'featured'=>1,'state'=>1,'img'=>'quan-kaki-xanh-man.jpg','category_id'=>3],
            ['id'=>8,'code'=>'SP08','name'=>'Quần kaki Xám','slug'=>'quan-kaki-xam','price'=>120000,'featured'=>1,'state'=>1,'img'=>'quan-kaki-xam.jpg','category_id'=>3],
        ]);
    }
}
