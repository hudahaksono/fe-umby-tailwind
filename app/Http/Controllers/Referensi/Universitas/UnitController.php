<?php

namespace App\Http\Controllers\Referensi\Universitas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class UnitController extends Controller
{
    public function index()
    {
        return view('referensi.universitas.unit');
    }

    public function list(Request $request)
    {
        $dataApi = Http::get('http://localhost:8080/v1/unit/getUnit/00');
        $data = array();
        foreach ($dataApi['data'] as $post) {
            // $parentId = $post['kodeunit'];
            // $namaunit = strip_tags($post['text']);
            // $namaunit = str_replace("&nbsp"," ",$namaunit);
            $nestedData['value'] = $post['value'];
            $nestedData['text'] = $post['text'];
            $nestedData['lvl'] = $post['lvl'];
            $data[] = $nestedData;
            
        }
        // return response()->json($data);
        return $data;
    }
}
