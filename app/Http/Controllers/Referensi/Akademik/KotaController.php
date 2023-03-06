<?php

namespace App\Http\Controllers\Referensi\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class KotaController extends Controller
{
    public function index()
    {
        return view('referensi.universitas.unit');
    }

    public function GetKota(Request $request)
    {
        $dataApi = Http::get('http://localhost:8080/v1/kota');
        $data = array();
        foreach ($dataApi['data'] as $post) {
            $nestedData['value'] = $post['kodekota'];
            $nestedData['text'] = $post['namakota'];
            $data[] = $nestedData;
            
        }
        return $data;
    }
}
