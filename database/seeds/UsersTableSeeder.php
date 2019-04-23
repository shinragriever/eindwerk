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
        
        DB::table('users')->insert([
            'role_id'=>1,
            'is_active'=>1,
            'name'=>'thomas bousson',
            'email' => 'admin@griever.be',
            'password'=>bcrypt('Azerty**01'),
            'remember_token' => str_random(10)]);
    }
}
