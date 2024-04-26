<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    
    public function index()
    {
        $row = [];

        //tambah data kategori
        // $ins = [
        //     [
        //         'kategori_kode' => 'SMP',
        //         'kategori_nama' => 'Smartphone',
        //         'created_at' => now()
        //     ],
        //     [
        //         'kategori_kode' => 'LPT',
        //         'kategori_nama' => 'Laptop',
        //         'created_at' => now()
        //     ],
        //     [
        //         'kategori_kode' => 'PRN',
        //         'kategori_nama' => 'Printer',
        //         'created_at' => now()
        //     ]
        // ];
        // DB::table('m_kategori')->insert($ins);

        // update data kategori
        // DB::table('m_kategori')
        //     ->where('kategori_kode', 'RTI')
        //     ->update([
        //         'kategori_kode' => 'MTR',
        //         'kategori_nama' => 'Motor',
        //         'updated_at' => now()
        //     ]);
        //     // update m_kategori set kategori_kode = 'MTR', kategori_nama = 'Motor', updated_at = now() where kategori_kode = 'RTI'


        // hapus data kategori
        DB::table('m_kategori')->where('kategori_kode', 'SBK')->delete();


        // ambil data kategori
        $row = DB::table('m_kategori')->get();
    
        return view('kategori', ['data' => $row]);
    }
}
