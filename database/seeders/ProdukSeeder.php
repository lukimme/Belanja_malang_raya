<?php

namespace Database\Seeders;

use App\Models\produks;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        produks::truncate();
        Schema::enableForeignKeyConstraints();

        // $data_produk = [
        //     ['id_penjual' => 1, 'id_kategori' => 1, 'id_admin' => 1, 'nama_produk' => 'handphone', 'deskripsi_produk' => 'Handphone dengan kualitas sangat bagus', 'diskon' => '20%' ,'nomor_penjual' => '09876', 'gambar' => 'handphone.jpg', 'pesan' => 'Apakah produk ini masih ada?'],
        //     ['id_penjual' => 2, 'id_kategori' => 2, 'id_admin' => 2, 'nama_produk' => 'laptop', 'deskripsi_produk' => 'Laptop dengan kualitas sangat bagus', 'diskon' => '' , 'nomor_penjual' => '67890', 'gambar' => 'laptop.jpg', 'pesan' => 'Apakah produk ini masih ada?']
        // ];

        // foreach ($data_produk as $produk) {
        //     produks::insert([
        //         'id_penjual'        => $produk['id_penjual'],
        //         'id_kategori'       => $produk['id_kategori'],
        //         'id_admin'          => $produk['id_admin'],
        //         'nama_produk'       => $produk['nama_produk'],
        //         'deskripsi_produk'  => $produk['deskripsi_produk'],
        //         'diskon'            => $produk['diskon'],
        //         'nomor_penjual'     => $produk['nomor_penjual'],
        //         'gambar'            => $produk['gambar'],
        //         'pesan'             => $produk['pesan']
        //     ]);
        // }

    }
}
