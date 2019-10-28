@extends('base.beta')
@section('container')
<div class="container playercontainer">
    <div class="row m-auto align-items-center w-100">
        <div class="col col-12 col-md-6 text-center">
            <img src="/assets/images/xt-logo.png" alt="XT Logo" style="width:250px; height: 250px;">
        </div>
        <div class="col col-12 col-md-6 w-100">
            <div id="xt-player" class="">
                <button id="button-play" type="button" class="btn btn-primary" style="width: 80px; height: 80px; background-color: #ff6f00; border-color:#ff6f00; border: 0px;">
                    <i class="fas fa-play fa-1x"></i><br/>
                    Play
                </button>
                <button id="button-volume" type="button" class="btn btn-primary" style="width: 80px; height: 80px; background-color: #ff6f00; border-color:#ff6f00; border: 0px;">
                    <i class="fas fa-volume-up fa-1x"></i><br/>
                    Play
                </button>
            </div>
            <br/>
            <div class="alert alert-warning m-auto" style="width: fit-content;">
                <h4 class="m-0" id="status-acara">Acara sekarang: -</h4>
            </div>
        </div>
    </div>
</div>
@endsection
@section('assetscss')
<style type="text/css">
    .playercontainer{
        display: flex;
        align-items: center;
        min-height: calc(100vh - 80px);
    }
    @media (min-width: 768px) {
        .playercontainer{
            min-height: calc(100vh - 210px);
        }
    }
</style>
@endsection
@section('assetsjs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/id.js" integrity="sha256-5aLk1fogTLyWd3GNewO2j33+AtT02NYcGkkskO+3EQQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.26/moment-timezone.min.js" integrity="sha256-9QeMOhKF5nGXvByLC2BkHmW9JaL6Fn4+YCfhvR0VO2s=" crossorigin="anonymous"></script>
<script type="text/javascript">
    var audioPlayer = undefined;

    moment.locale('id')
    moment.tz.load({
        "version": "2018g",
        "zones": [
            "Asia/Jakarta|LMT BMT +0720 +0730 +09 +08 WIB|-77.c -77.c -7k -7u -90 -80 -70|012343536|-49jH7.c 2hiLL.c luM0 mPzO 8vWu 6kpu 4PXu xhcu|31e6"
        ],
        "links": [

        ]
    })

    var jamXT = moment().tz('Asia/Jakarta');
    var jamXT_S = jamXT.format("YYYY-MM-DD");

    var acaraBMX_min = moment(jamXT_S+" 08:00:00 +07:00", "YYYY-MM-DD HH:mm:ss Z");
    var acaraBMX_max = moment(jamXT_S+" 09:59:59 +07:00", "YYYY-MM-DD HH:mm:ss Z");

    var acaraLeyeh_min = moment(jamXT_S+" 12:00:00 +07:00", "YYYY-MM-DD HH:mm:ss Z");
    var acaraLeyeh_max = moment(jamXT_S+" 13:59:59 +07:00", "YYYY-MM-DD HH:mm:ss Z");

    var acaraKuper_min = moment(jamXT_S+" 16:00:00 +07:00", "YYYY-MM-DD HH:mm:ss Z");
    var acaraKuper_max = moment(jamXT_S+" 17:29:59 +07:00", "YYYY-MM-DD HH:mm:ss Z");

    var acara7PM_min = moment(jamXT_S+" 19:00:00 +07:00", "YYYY-MM-DD HH:mm:ss Z");
    var acara7PM_max = moment(jamXT_S+" 20:59:59 +07:00", "YYYY-MM-DD HH:mm:ss Z");

    function updateAcara(){
        if(jamXT.format("d")>=1 && jamXT.format("d")<=5)
        {
            if(jamXT.format("H")>=8 && jamXT.format("H")<21)
            {
                if(jamXT.diff(acaraBMX_min)>0 && acaraBMX_max.diff(jamXT)>0)
                {
                    document.getElementById("status-acara").innerHTML = "Acara sekarang: BMX";
                }
                else if(jamXT.diff(acaraLeyeh_min)>0 && acaraLeyeh_max.diff(jamXT)>0)
                {
                    document.getElementById("status-acara").innerHTML = "Acara sekarang: Leyeh-leyeh";
                }
                else if(jamXT.diff(acaraKuper_min)>0 && acaraKuper_max.diff(jamXT)>0)
                {
                    document.getElementById("status-acara").innerHTML = "Acara sekarang: Kuper Berad";
                }
                else if(jamXT.diff(acara7PM_min)>0 && acara7PM_max.diff(jamXT)>0)
                {
                    document.getElementById("status-acara").innerHTML = "Acara sekarang: 7PM";
                }
                else
                {
                    document.getElementById("status-acara").innerHTML = "Acara sekarang: Music Time";
                }
            }
            else
            {
                document.getElementById("status-acara").innerHTML = "Acara sekarang: -";
            }
        }
        else
        {
            document.getElementById("status-acara").innerHTML = "Acara sekarang: -";
        }

        // document.getElementById("status-acara").innerHTML = "Acara sekarang: -";
        setTimeout(updateAcara, 60000);
    }

    function updateState(){
        var volume = document.getElementById("button-volume");
        var volumeIconString = "fa-volume-up";
        var volumeString = "100%";
        if(audioPlayer.volume == 1){
            volumeIconString = "fa-volume-up";
            volumeString = "100%";
        }
        else if(audioPlayer.volume == 0){
            volumeIconString = "fa-volume-mute";
            volumeString = "Muted";
        }
        volume.innerHTML = "<i class=\"fas "+volumeIconString+" fa-1x\"></i><br/>"+volumeString;

        var play = document.getElementById("button-play");
        var playIconString = "fa-play";
        var playString = "Play";
        if(audioPlayer.paused){
            playIconString = "fa-play";
            playString = "Play";
        }
        else{
            playIconString = "fa-stop";
            playString = "Stop";
        }
        play.innerHTML = "<i class=\"fas "+playIconString+" fa-1x\"></i><br/>"+playString;
    }

    $(document).ready(function(){
        audioPlayer = document.getElementById("audio-player");
        if(audioPlayer == undefined){
            console.log("Tidak ada audio player");
        }
        updateState();
        updateAcara();

        console.log("Jam PC: "+moment().format());
        console.log("Jam XT: "+jamXT.format());
    });

    $("#button-volume").click(function(){
        audioPlayer.volume = audioPlayer.volume==1?0:1;
        updateState();
    });

    $("#button-play").click(function(){
        while (audioPlayer.firstChild) {
            audioPlayer.removeChild(audioPlayer.firstChild);
        }
        if(audioPlayer.paused==1){
            console.log("Play radio");
            var addAudio = document.createElement("source");
            addAudio.setAttribute("src", 'http://112.78.45.66:8000/stream?type=.mp3');
            addAudio.setAttribute("type", "audio/mpeg");
            audioPlayer.appendChild(addAudio);
            addAudio = document.createElement("source");
            addAudio.setAttribute("src", 'http://112.78.45.66:8000/stream?type=.ogg');
            addAudio.setAttribute("type", "audio/ogg");
            audioPlayer.appendChild(addAudio);

            audioPlayer.play();
        }else{
            console.log("Stop radio");
            audioPlayer.pause();
        }

        updateState();
    });

    $(".navbar a").click(function(e){
        // e.preventDefault();
    });
</script>
@endsection