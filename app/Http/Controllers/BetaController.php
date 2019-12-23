<?php


namespace App\Http\Controllers;


use App\Http\Controllers\API\JadwalController;
use App\Jadwal;
use Illuminate\Http\Request;

class BetaController extends Controller
{
    public function index(Request $request){
        $jadwalList = Jadwal::all();

        return view('beta.player', ['data' => $jadwalList]);
    }
}