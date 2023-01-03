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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // $dataAdmin = [
        //     ['nama' => 'Super Admin', 'email' => 'superadmin@bm.com', 'sandi' => '1234', 'foto' => 'halo.jpg', 'status' => 1],
        //     ['nama' => 'Sub Admin', 'email' => 'subadmin@bm.com', 'sandi' => '12345', 'foto' => 'halo0.jpg', 'status' => 2],
        //     ['nama' => 'Sub Admin2', 'email' => 'subadmin2@bm.com', 'sandi' => '123456', 'foto' => 'halo02.jpg', 'status' => 3]
        // ];

        // foreach ($dataAdmin as $value) {
        //     admins::insert([

        //         'nama' => $value['nama'],
        //         'email' => $value['email'],
        //         'sandi' => $value['sandi'],
        //         'foto' => $value['foto'],
        //         'status' => $value['status']
=======
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
>>>>>>> parent of d971488... pemberian hak akses

=======
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

>>>>>>> parent of d971488... pemberian hak akses
=======
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

>>>>>>> parent of d971488... pemberian hak akses
=======
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

>>>>>>> parent of d971488... pemberian hak akses
=======
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

>>>>>>> parent of d971488... pemberian hak akses
            ]);
        }
    }
}
