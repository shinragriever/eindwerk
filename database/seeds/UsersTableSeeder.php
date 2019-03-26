<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User',50)->create();
        DB::table('users')->insert([
            'role_id'=>1,
            'is_active'=>1,
            'name'=>'thomas bousson',
            'email' => 'thrashanddestroy@gmail.com',
            'password'=>bcrypt('Azerty**01'),
            'remember_token' => str_random(10)]);
    }
}
