<?php

namespace App\Http\Controllers\Referensi\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class JabStrukturalController extends Controller
{
    public function index()
    {
        return view('referensi.universitas.unit');
    }

    public function getData(Request $request)
    {
        $dataApi = Http::get('http://localhost:8080/v1/jabatan-struktural');
        $data = array();
        foreach ($dataApi['data'] as $post) {
            $nestedData['value'] = $post['jabstruktural'];
            $nestedData['text'] = $post['namajabstruktural'];
            $data[] = $nestedData;
            
        }
        return $data;
    }
}
