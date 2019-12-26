<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class XTController extends Controller
{
        public function getXTData(Request $request){
            $shutdown = true;
            $listener = 0;
            $listener_peak = 0;
            $stream_start = null;
            try{
                $url = "http://xt-radio.com:8000/status-json.xsl";
                $json = file_get_contents($url);
                $json_data = json_decode($json, false);
                $shutdown = $json_data->icestats->source == null;

                if($shutdown == false){
                    $source = $json_data->icestats->source;
                    if(is_array($source)){
                        $shutdown = true;
                    }
                    else{
                        $listener = $source->listeners;
                        $listener_peak = $source->listener_peak;
                        $stream_start = $source->stream_start_iso8601;
                    }
                }
            }
            catch (\Exception $e){

            }

            return response()->json([
                'shutdown' => $shutdown,
                'listeners' => $listener,
                'listener_peak' => $listener_peak,
                'stream_start' => Carbon::parse($stream_start)->format('d M Y H:i:s')
            ]);
        }
}