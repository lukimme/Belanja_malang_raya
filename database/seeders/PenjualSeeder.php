<?php

namespace Database\Seeders;

use App\Models\penjuals;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenjualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Truncate
        Schema::disableForeignKeyConstraints();
        penjuals::truncate();
        Schema::enableForeignKeyConstraints();

        $data_penjual = [
            ['id' => 1, 'nama_penjual' => 'prima', 'brand_penjual' => 'ekastore', 'nomor_penjual' => '098765', 'email_penjual' => 'ekastore@gmail.com', 'sandi' => '', 'foto' => 'eka.jpg', 'alamat' => 'tojayan'],
            ['id' => 2, 'nama_penjual' => 'irsal', 'brand_penjual' => 'irsalstore', 'nomor_penjual' => '123456', 'email_penjual' => 'irsal@gmail.com', 'sandi' => '', 'foto' => 'irsal.jpg', 'alamat' => 'tojayan2'],
        ];

        foreach ($data_penjual as $penjual) {
            penjuals::insert([
                'id'            => $penjual['id'],
                'nama_penjual'  => $penjual['nama_penjual'],
                'brand_penjual' => $penjual['brand_penjual'],
                'nomor_penjual' => $penjual['nomor_penjual'],
                'email_penjual' => $penjual['nama_penjual'],
                'sandi'         => $penjual['sandi'],
                'foto'          => $penjual['foto'],
                'alamat'        => $penjual['alamat']
            ]);
        }
    }
}
