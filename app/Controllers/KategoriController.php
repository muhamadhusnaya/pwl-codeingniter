<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KategoriController extends BaseController
{
    public function index()
    {
        $Kategori['Kategori'] = [
            'alat_tulis',
            'elektronik',
            'pakaian',
            'pertukangan',
            'snack'            
        ];
        return view('kategori', $Kategori);
    }

    public function alat_tulis()
    {
        $AlatTulis['AlatTulis'] = [
            'Pensil',
            'Buku Tulis',
            'Penghapus',
            'Penggaris',
            'Spidol'
        ];
        return view('content/alat_tulis', $AlatTulis);
    }

    public function elektronik()
    {
        $Elektronik['Elektronik'] = [
            'HP',
            'Laptop',
            'Kamera',
            'TV',
            'Kulkas'
        ];
        return view('content/elektronik', $Elektronik);
    }

    public function pakaian()
    {
        $Pakaian['Pakaian'] = [
            'Kemeja',
            'Celana',
            'Jaket',
            'Sepatu',
            'Topi'
        ];
        return view('content/pakaian', $Pakaian);
    }

    public function pertukangan()
    {
        $Pertukangan['Pertukangan'] = [
            'Palu',
            'Gergaji',
            'Paku',
            'Besi',
            'Kunci Inggris'
        ];
        return view('content/pertukangan', $Pertukangan);
    }

    public function snack()
    {
        $Snack['Snack'] = [
            'Chitato',
            'Oreo',
            'Tango',
            'Chiki',
            'Lays'
        ];
        return view('content/snack', $Snack);
    }
}
