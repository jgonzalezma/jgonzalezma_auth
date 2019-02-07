<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles_users')->insert([
          'rol_id' => '1',
          'user_id' => '1'
        ]);
        DB::table('roles_users')->insert([
          'rol_id' => '2',
          'user_id' => '1'
        ]);
    }
}
