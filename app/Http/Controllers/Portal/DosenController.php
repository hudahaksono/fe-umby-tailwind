<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class DosenController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nip' => 'required',
            'kodeunit' => 'required',
            'nama' => 'required',
            // 'dipakai' => 'required',
            // 'nilaimasuk' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()], Response::HTTP_FORBIDDEN);
        }

        $response = Http::post('http://localhost:8080/v1/dosen/posts', ['nip' => '123']);
        return Http::get('http://localhost:8080/v1/dosen/list');
        // $msg = 'Data berhasil di simpan';
        return response()->json(['success' => true, 'message' => $request->all()]);
    }
}
