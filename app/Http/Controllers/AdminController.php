<?php

namespace App\Http\Controllers;

use App\Jadwal;
use Illuminate\Http\Request;

use Auth;
use App\Stats;
use Thetispro\Setting\Facades\Setting;

class AdminController extends Controller
{
    public function LoginGet(Request $request){
        if(Auth::check()){
            return redirect('/admin');
        }
        return view('login');
    }
    public function LoginPost(Request $request){
        $username = $request->username;
        $password = $request->password;

        if(Auth::attempt(['username' => $username, 'password' => $password])){
            return redirect('/admin');
        }
        return redirect('/login')->with('alert', 'username atau password salah');
    }
    public function Logout(Request $request){
        Auth::Logout();
        return redirect('/login');
    }
    public function IndexGet(Request $request){
        return view('admin.index');
    }
    public function StatsGet(Request $request){
        $tanggal = \Carbon\Carbon::now()->format("Y-m-d");
        $query = $request->tanggal;
        if($query!=null){
            $tanggal = $query;
        }
        $tanggal_min = Stats::min('tanggal');
        if($tanggal_min == null){
            $tanggal_min = \Carbon\Carbon::now()->format("Y-m-d");
        }
        else {
            $tanggal_min = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tanggal_min)->format("Y-m-d");
        }
        $data = Stats::where('tanggal','like',$tanggal.'%')->get();
        return view('admin.stats', ['data' => $data, 'query' => $request->tanggal, 'tanggal' => $tanggal, 'tanggal_min' => $tanggal_min]);
    }
    public function JadwalGet(Request $request){
        $data = Jadwal::orderBy('jam_awal')->get();
        return view(
            'admin.jadwal',
            [
                'data' => $data
            ]
        );
    }
    public function JadwalPost(Request $request){
        $hari = collect($request->hari)->implode(',');
        $jamAwal = $request->jam_awal;
        $jamAkhir = $request->jam_akhir;
        $nama = $request->nama;

        $jadwal = new Jadwal();
        $jadwal->hari = $hari;
        $jadwal->jam_awal = $jamAwal;
        $jadwal->jam_akhir = $jamAkhir;
        $jadwal->nama = $nama;
        $jadwal->save();

        return redirect('/admin/jadwal');
    }
    public function JadwalDelete(Request $request, $id){
        Jadwal::where('id', $id)->delete();
        return redirect('/admin/jadwal');
    }
    public function SettingsGet(Request $request){
        $shutdown = Setting::get('shutdown', false);
        $message = Setting::get('message');
        return view('admin.settings', [
            'shutdown' => $shutdown,
            'message' => $message
        ]);
    }
    public function SettingsPost(Request $request){
        $shutdown = $request->shutdown=="on"?true:false;
        $message = $request->message;

        Setting::set('shutdown', $shutdown);
        Setting::set('message', $message);

        return redirect('/admin/settings');
    }
}
