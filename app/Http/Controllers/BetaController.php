<?php


namespace App\Http\Controllers;


use App\Http\Controllers\API\JadwalController;
use App\Jadwal;
use Illuminate\Http\Request;
use Thetispro\Setting\Facades\Setting;

class BetaController extends Controller
{
    public function index(Request $request){
        $jadwalList = Jadwal::all();
        $shutdown = Setting::get('shutdown', false);
        $message = Setting::get('message', '-');
        return view('beta.player', [
            'data' => $jadwalList,
            'shutdown' => $shutdown,
            'message' => $message
        ]);
    }
}