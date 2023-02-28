<?php

namespace App\Http\Controllers\Referensi\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class JabAkademikController extends Controller
{
    public function index()
    {
        return view('referensi.universitas.unit');
    }

    public function getData(Request $request)
    {
        $dataApi = Http::get('http://localhost:8080/v1/jabatan-akademik');
        $data = array();
        foreach ($dataApi['data'] as $post) {
            $nestedData['value'] = $post['jabakademik'];
            $nestedData['text'] = $post['namajabakademik'];
            $data[] = $nestedData;
            
        }
        return $data;
    }
}
