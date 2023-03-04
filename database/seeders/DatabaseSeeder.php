<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' =>'admin@gmail.com',
            'password' => Hash::make('1111'),
            'role'=>'admin',
        ]);
        DB::table('coupons')->insert([
            'code'=>'baru2023',
            'type'=>'fixed',
            'value'=>'300',
            'status'=>'active'
        ]);
        DB::table('brands')->insert([
            'title'=>'baju',
            'slug'=>'baju',
            'status'=>'active'
        ]);
        DB::table('categories')->insert([
            'title'=>'baju',
            'slug'=>'baju',
            'summary'=>'baju',
            'photo'=>'none',
            'is_parent'=>'1',
            'parent_id'=>'1',
            'added_by'=>'1',
            'status'=>'active'
        ]);
        DB::table('settings')->insert([
            'description'=>"halo ke startup saya",
            'short_des'=>"Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.",
            'photo'=>"image.jpg",
            'logo'=>'logo.jpg',
            'address'=>"NO. 342 - London Oxford Street, 012 United Kingdom",
            'email'=>"widoerlangga212@gmail.com",
            'phone'=>"+060 (800) 801-582",
        ]);
    }
}
