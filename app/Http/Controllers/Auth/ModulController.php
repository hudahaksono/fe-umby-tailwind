<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ModulController extends Controller
{
    public function index()
    {
        $userid = session()->get('sess_userid');
        $data = [
                'userid'      => $userid,
            ];
        $dataApiModuls = Http::post('http://localhost:8080/v1/user/get-moduls', $data);
        $dataApiRoles = Http::post('http://localhost:8080/v1/user/get-roles', $data);

        // dd($dataApiModuls[0]['kodemodul'], count($dataApiModuls));
        $dataModuls = array();
        foreach ($dataApiModuls['data'] as $modul) {
            $nestedData['kodemodul'] = $modul['kodemodul'];
            $nestedData['namamodul'] = $modul['namamodul'];
            $dataModuls[] = $nestedData;
        }

        $dataRoles = array();
        foreach ($dataApiRoles['data'] as $modul) {
            $nestedRole['kodeunit'] = $modul['kodeunit'];
            $nestedRole['koderole'] = $modul['koderole'];
            $nestedRole['kodemodul'] = $modul['kodemodul'];
            $nestedRole['namamodul'] = $modul['namamodul'];
            $nestedRole['namarole'] = $modul['namarole'];
            $nestedRole['namaunit'] = $modul['namaunit'];
            $dataRoles[] = $nestedRole;
        }

        return view('auth.modul', compact('dataModuls', 'dataRoles'));
    }
}
