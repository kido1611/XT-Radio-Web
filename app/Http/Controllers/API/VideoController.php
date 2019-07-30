<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Video;

class VideoController extends Controller
{
    public function VideosGet(Request $request){
        $response = array();
        $videoList = Video::orderBy('created_at', 'desc')->select('idVideos')->get();
        foreach($videoList as $videoItem){
            array_push($response, $videoItem["idVideos"]);
        }
        return response()->json(['video' => $response]);
    }
}
