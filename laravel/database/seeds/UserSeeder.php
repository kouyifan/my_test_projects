<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\User::class,200)->create();
        $user = \App\User::find(1);
        $user->name = 'kouyifan';
        $user->email = '26745709@qq.com';
        $user->password = bcrypt('admin888');
        $user->save();
    }
}
