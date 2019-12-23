<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function GetJadwal(Request $request){
        $jadwalList = Jadwal::all();

        $response = [];
        foreach ($jadwalList as $jadwal){
            $item = [];
            $item['id'] = $jadwal->id;
            $item['nama'] = $jadwal->nama;
            $item['hari'] = explode(',',  $jadwal->hari);
            $item['jam_awal'] = $jadwal->jam_awal;
            $item['jam_akhir'] = $jadwal->jam_akhir;

            array_push($response, $item);
        }

        return response()->json($response);
    }
}