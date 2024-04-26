<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'level_kode' => 'ADM',
                'level_nama' => 'Administrator',
                'created_at' => now(),
            ],
            [
                'level_kode' => 'MNG',
                'level_nama' => 'Manager',
                'created_at' => now(),
            ],
            [
                'level_kode' => 'SPV',
                'level_nama' => 'Supervisor',
                'created_at' => now(),
            ],
            [
                'level_kode' => 'KSR',
                'level_nama' => 'Kasir/Staff',
                'created_at' => now(),
            ],
        ];

        DB::table('m_level')->insert($data);
    }
}
