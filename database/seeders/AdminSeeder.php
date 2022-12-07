<?php

namespace Database\Seeders;

use App\Models\admins;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        admins::truncate();
        Schema::enableForeignKeyConstraints();

        // $dataAdmin = [
        //     ['nama' => 'Super Admin', 'email' => 'superadmin@bm.com', 'sandi' => '1234', 'foto' => 'halo.jpg', 'status' => 1],
        //     ['nama' => 'Sub Admin', 'email' => 'subadmin@bm.com', 'sandi' => '12345', 'foto' => 'halo0.jpg', 'status' => 2]
        // ];

        // foreach ($dataAdmin as $value) {
        //     admins::insert([

        //         'nama' => $value['nama'],
        //         'email' => $value['email'],
        //         'sandi' => $value['sandi'],
        //         'foto' => $value['foto'],
        //         'status' => $value['status']

        //     ]);
        // }
    }
}
