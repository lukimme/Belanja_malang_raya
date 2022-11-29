<?php

namespace Database\Seeders;

use App\Models\penjuals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_penjual = [
            ['nama_penjual' => 'prima', 'brand_penjual' => 'ekastore', 'nomor_penjual' => '098765', 'email_penjual' => 'ekastore@gmail.com', 'sandi' => '', 'foto' => 'eka.jpg', 'alamat' => 'tojayan'],
            ['nama_penjual' => 'irsal', 'brand_penjual' => 'irsalstore', 'nomor_penjual' => '123456', 'email_penjual' => 'irsal@gmail.com', 'sandi' => '', 'foto' => 'irsal.jpg', 'alamat' => 'tojayan2'],
        ];

        foreach ($data_penjual as $penjual) {
            penjuals::insert([
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
