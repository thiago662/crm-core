<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'thiago gonçalves santos - adm',
                'email' => 'thiago.administrador@followize.com.br',
                'password' => Hash::make('@123mudar'),
                'cell' => '11971257707',
                'status' => true,
                'role_id' => 1,
                'account_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'thiago gonçalves santos',
                'email' => 'thiago@followize.com.br',
                'password' => Hash::make('@123mudar'),
                'cell' => '11971257707',
                'status' => true,
                'role_id' => 2,
                'account_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'thiago gonçalves santos - adm',
                'email' => 'thiago.administrador@performey.com.br',
                'password' => Hash::make('@123mudar'),
                'cell' => '11971257707',
                'status' => true,
                'role_id' => 1,
                'account_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'thiago gonçalves santos',
                'email' => 'thiago@performey.com.br',
                'password' => Hash::make('@123mudar'),
                'cell' => '11971257707',
                'status' => true,
                'role_id' => 2,
                'account_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
