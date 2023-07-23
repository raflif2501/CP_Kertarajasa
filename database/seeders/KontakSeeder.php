<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kontak;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kontak::create([
            'jenis' => 'Alamat',
            'isi' => 'Alamat Kerta Rajasa Raya',
            'alamat' => 'Jl. Raya Tropodo no. 1 Waru – Sidoarjo 61256, East Java , Indonesia',
        ]);
        Kontak::create([
            'jenis' => 'Phone',
            'isi' => 'Hunting',
            'alamat' => '+62-31-866-9966',
        ]);
        Kontak::create([
            'jenis' => 'Phone',
            'isi' => 'Hunting',
            'alamat' => '+62-31-866-9595',
        ]);
        Kontak::create([
            'jenis' => 'Fax',
            'isi' => 'Kerta Rajasa Raya',
            'alamat' => '+62-31-866-9989',
        ]);
        Kontak::create([
            'jenis' => 'Fax',
            'isi' => 'Kerta Rajasa Raya',
            'alamat' => '+62-31-867-5315',
        ]);
        Kontak::create([
            'jenis' => 'Email',
            'isi' => 'Kerta Rajasa Raya',
            'alamat' => 'sales@kertarajasa.co.id',
        ]);
        Kontak::create([
            'jenis' => 'Email',
            'isi' => 'Kerta Rajasa Raya',
            'alamat' => 'mkt168@kertarajasa.co.id',
        ]);
    }
}
