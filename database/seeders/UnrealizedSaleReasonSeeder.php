<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnrealizedSaleReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unrealized_sale_reasons')->insert([
            'title' => 'expensive',
            'status' => true,
            'account_id' => 1,
        ]);
    }
}
