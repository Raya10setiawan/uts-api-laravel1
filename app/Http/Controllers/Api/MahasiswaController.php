<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Kita TIDAK perlu 'use App\Models\Mahasiswa;'

class MahasiswaController extends Controller
{
    public function index()
    {
        // BUAT DATA DUMMY DI SINI
        $mahasiswa = [
            [
                'id' => 1,
                'nama' => 'Iyas Salahudin',
                'email' => 'iyasnawati@example.org',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nama' => 'Intan Agustina',
                'email' => 'tdabukke@example.net',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nama' => 'Melinda Sudiati',
                'email' => 'andriani.sadina@example.org',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'nama' => 'Riyani',
                'email' => 'Riyani@example.org',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Kembalikan response sesuai gambar
        return response()->json([
            'status' => 'success',
            'data' => $mahasiswa
        ], 200);
    }
}
