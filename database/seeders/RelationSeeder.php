<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
        'mahasiswa_npm' => "101010",
        'dosen_nidn' => '121212',
        'matakuliah_kode' => '232323',
        'status_aktif' => 'Y',
    ]);
        //
    }
}
