<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $dataAdmin = [
            ['id_role' => 1,'name' => 'Lukman hakim', 'email' => 'lukman@bm.com', 'nomor' => '081233422006','foto' => 'halo.jpg', 'password' => hash::make('1234')],
        ];

        foreach ($dataAdmin as $value) {
            User::insert([

                'id_role' => $value['id_role'],
                'name' => $value['name'],
                'email' => $value['email'],
                'nomor' => $value['nomor'],
                'foto' => $value['foto'],
                'password' => $value['password']

            ]);
        }
    }
}
