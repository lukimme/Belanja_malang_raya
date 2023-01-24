<?php

namespace Database\Seeders;

use App\Models\roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Schema::disableForeignKeyConstraints();
        roles::truncate();
        Schema::enableForeignKeyConstraints();

        // $dataRole = [
        //     ['nama' => 'Super Admin'],
        //     ['nama' => 'Sub Admin']
        // ];

        // foreach ($dataRole as $value) {
        //     roles::insert([
        //         'nama' => $value['nama']
        //     ]);
        // }

    }
}
