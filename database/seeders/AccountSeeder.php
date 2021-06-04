<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'name' => 'followize',
                'email' => 'contato@followize.com.br',
                'phone' => '1135141752',
                'cell' => '1135141752',
                'company_code' => '14931549000104',
                'status' => true,
                'segment_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'performey',
                'email' => 'contato@performey.com.br',
                'phone' => '1135141752',
                'cell' => '1135141752',
                'company_code' => '14931549000104',
                'status' => true,
                'segment_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
