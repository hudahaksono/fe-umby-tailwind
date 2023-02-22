<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class DosenController extends Controller
{
    public function list_data(Request $request)
    {
        $dataApi = Http::get('http://localhost:8080/v1/dosen/list');
        $data = array();
        if(isset($dataApi['data'])){
            
            foreach ($dataApi['data'] as $post) {
                $nestedData['id'] = $post['nip'];
                $nestedData['nip'] = $post['nip'];
                $nestedData['nama'] = $post['nama'];
                $nestedData['jenis_kelamin'] = $post['sex'];
                $nestedData['unit_kerja'] = $post['namaunit'];
                $data[] = $nestedData;
            }
            // return response()->json($data);
            return $data;
        }else{
            return $data;
        }
        
    }

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

        try {
            // dd($request->all());
            // $response = Http::post('http://localhost:8080/v1/dosen/posts', ['nip'=>'1234', 'kodeunit'=>1, 'nama'=>'Ludi Tes', 'email'=>'ludi@gmail.com', 'tipepeg'=>'K']);
            // $response = Http::post('http://localhost:8080/v1/dosen/posts', $request->all());
            // $msg = 'Data berhasil di simpan';
            // dd(json_encode($request->all()));
            $data = [
                'nip'      => $request->nip,
                'kodeunit'      => $request->kodeunit,
                'nama'      => $request->nama,
                'gelardepan'      => $request->gelar_depan,
                'gelarbelakang'      => $request->gelar_belakang,
                'sex'      => $request->sex,
                'tmplahir'      => $request->tmplahir,
                'tgllahir'      => $request->tgllahir,
                'goldarah'      => $request->goldarah,
                'alamat'      => $request->alamat_jalan.', '.$request->alamat_rt.' '.$request->alamat_rw.', '.$request->kelurahan,
                'kodepos'      => $request->kodepos,
                'telp'      => $request->telp,
                'telp2'      => $request->telp2,
                'hp'      => $request->hp,
                'hp2'      => $request->hp2,
                'email'      => $request->email,
                'email2'      => $request->email2,
                'tipepeg'      => 'K',
            ];
            $token = $request->cookie('XSRF-TOKEN');
            $response = Http::post('http://localhost:8080/v1/dosen/posts', $data);
            return response()->json(['success' => true, 'message' => $response]);
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            $errorResJson = $e
                ->getResponse()
                ->getBody()
                ->getContents();
            $errorRes = json_decode(stripslashes($errorResJson), true);
            return response()->json(['success' => false, 'message' => $errorRes]);
        } 

        // return Http::get('http://localhost:8080/v1/dosen/list');
    }

    public function list_agama(Request $request)
    {
        $dataApi = Http::get('http://localhost:8080/v1/agama');
        $data = array();
        if(isset($dataApi['data'])){
            foreach ($dataApi['data'] as $post) {
                $nestedData['value'] = $post['kodeagama'];
                $nestedData['text'] = $post['namaagama'];
                $data[] = $nestedData;
            }
            // return response()->json($data);
            return $data;
        }else{
            return $data;
        }
        
    }
}
