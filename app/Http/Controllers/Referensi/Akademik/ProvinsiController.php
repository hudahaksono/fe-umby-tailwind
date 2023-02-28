<?php

namespace App\Http\Controllers\Referensi\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ProvinsiController extends Controller
{
    public function index()
    {
        return view('referensi.universitas.unit');
    }

    public function GetProvinsi(Request $request)
    {
        $dataApi = Http::get('http://localhost:8080/v1/provinsi');
        $data = array();
        foreach ($dataApi['data'] as $post) {
            $nestedData['value'] = $post['kodepropinsi'];
            $nestedData['text'] = $post['namapropinsi'];
            $data[] = $nestedData;
            
        }
        return $data;
    }
}
