<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo Mobile',
                'price'=>'13000',
                'discription'=>'A smartphone ram 4gb batter 4000mhrg good style',
                'category'=>'mobile',
                'gallery'=>'https://i.gadgets360cdn.com/products/large/VivoV19Display-1200x675-1589291751143.jpg?downsize=*:420&output-quality=80'
                    
            ],
            [
                'name'=>'Apple Mobile',
                'price'=>'123000',
                'discription'=>'A smartphone ram 4gb batter 4000mhrg good style',
                'category'=>'mobile',
                'gallery'=>'https://i.gadgets360cdn.com/products/large/VivoV19Display-1200x675-1589291751143.jpg?downsize=*:420&output-quality=80'
    
            ],
            [
                'name'=>'Vivo Mobile',
                'price'=>'16000',
                'discription'=>'A smartphone ram 4gb batter 4000mhrg good style',
                'category'=>'mobile',
                'gallery'=>'https://i.gadgets360cdn.com/products/large/VivoV19Display-1200x675-1589291751143.jpg?downsize=*:420&output-quality=80'
    
            ],
            [
                'name'=>'Symphony Mobile',
                'price'=>'11000',
                'discription'=>'A smartphone ram 4gb batter 4000mhrg good style',
                'category'=>'mobile',
                'gallery'=>'https://i.gadgets360cdn.com/products/large/VivoV19Display-1200x675-1589291751143.jpg?downsize=*:420&output-quality=80'
    
            ],
            [
                'name'=>'Nokia Mobile',
                'price'=>'12000',
                'discription'=>'A smartphone ram 4gb batter 4000mhrg good style',
                'category'=>'mobile',
                'gallery'=>'https://i.gadgets360cdn.com/products/large/VivoV19Display-1200x675-1589291751143.jpg?downsize=*:420&output-quality=80'
    
            ]

        ]);
    }
}
