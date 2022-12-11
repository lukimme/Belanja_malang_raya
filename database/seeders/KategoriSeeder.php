<?php

namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        kategori::truncate();
        Schema::enableForeignKeyConstraints();

        $kategori = [
            ['id_admin' => 1, 'nama_kategori' => 'Produk digital', 'foto_kategori' => 'produkdigital.jpg']
        ];

        foreach ($kategori as $data) {
            kategori::insert([
                'id_admin'  => $data['id_admin'],
                'nama_kategori'  => $data['nama_kategori'],
                'foto_kategori'  => $data['foto_kategori']
            ]);
        }
    }
}
