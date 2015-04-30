<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserTableSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usr_users')->delete();
        User::create([
            'usr_email' => 'admin@admin.com',
            'usr_username' => '管理员',
            'usr_password' => Hash::make('admin'),
            'usr_status' => 10
        ]);
    }

}