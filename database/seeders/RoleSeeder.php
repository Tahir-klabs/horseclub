<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'leader',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'member',
                'created_at' => Carbon::now(),
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}
