<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="google" content="notranslate" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    
    <!-- HTML Meta Tags -->
    <title>XT Radio</title>
    <meta name="description" content="XT Radio - Only Fly For Freedom">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="XT Radio">
    <meta itemprop="description" content="XT Radio - Only Fly For Freedom">
    <meta itemprop="image" content="http://xt-radio.com/assets/images/xt-logo.png">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://xt-radio.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="XT Radio">
    <meta property="og:description" content="XT Radio - Only Fly For Freedom">
    <meta property="og:image" content="http://xt-radio.com/assets/images/xt-logo.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="XT Radio">
    <meta name="twitter:description" content="XT Radio - Only Fly For Freedom">
    <meta name="twitter:image" content="http://xt-radio.com/assets/images/xt-logo.png">

    <style>
        html{
            min-width: 350px;
        }
        #xt-play{
            background: url('assets/images/bg.jpg');
            background-position: center center;
            background-size: cover;
        }
        #xt-video{
            /* background: url('assets/images/xt-logo.png');
            background-position: center;
            background-size: cover; */
            background-color: #ff6f00;
        }
        .container{
            max-width: 970px;
        }
        .xt-container{
            /* background-color:#ff6f00; */
            /* ffeb3b; */
            color: #000;
            min-height:calc(50vh);
            padding: 56px 0px;
        }
        .xt-container-dark{
            background-color: #212121;
            color: #fff;
        }
        .xt-button-play{
            width: 80px; height: 80px; background-color: #ff6f00; color: #fff; border: 0;
        }
        .xt-button-play:hover{
            background-color: #c43e00;
        }
        footer{
            padding: 16px;
        }
    </style>
  </head>
  <body>
    <div id="wrapper" data-spy="scroll" data-target=".navbar">
        <!-- <nav id="xt-navbar" class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #ff6f00; color: #fff;">
            <div class="container">
                <h3>Coba website XT yang baru</h3>
                <div class="mr-auto"></div>
                <a href="https://beta.xt-radio.com" target="_blank" class="btn btn-primary">Klik disini</a>
            </div>
        </nav> -->
        <nav id="xt-navbar" class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" style="">
            <div class="container">
                <a class="navbar-brand " href="#wrapper">XT Radio</a>
            </div>
        </nav>
        <div class="xt-container align-items-center" id="xt-play" style="min-height: calc(100vh - 120px - 55px);">
            <div class="container align-items-center" >
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 text-center">
                        <img src="assets/images/xt-logo.png" style="width:250px; height: 250px;">
                    </div>
                    <div class="col-12 col-md-6 text-center ">
                        <audio nocontrols id="xt-player-audio">
                            <source src="http://112.78.45.66:8000/stream?timestamp" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <div class="alert alert-warning" role="alert" style="font-size: 14px; padding: 4px; width: auto;">
                            <h4>Acara sekarang: <span id="acara_text">-</span></h4>
                        </div>
                        <div class="input-group mb-3 text-center justify-content-center">
                            <div class="input-group-prepend">
                                <button class="btn xt-button-play" id="xt-player-button-play">
                                    <i class="fas fa-play fa-1x"></i><br/>
                                    Play
                                </button>
                            </div>
                            <button class="btn xt-button-play" id="xt-player-button-volume">
                                <i class="fas fa-volume-up fa-1x"></i>
                                <br/>
                                100%
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="livestreaming-container" class="d-none">
            <nav id="xt-navbar2" class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand " href="#xt-video">XT Radio Live Streaming</a>
                </div>
            </nav>
            <div class="xt-container" id="xt-video">
                <div class="container text-center" style="max-width: 640px; opacity: 1.0;" id="youtube-container">
                    <iframe src="https://www.youtube.com/embed/HyX2FksJ8bc" frameborder="0" allowfullscreen width="100%" height="400px"></iframe>
                </div>
            </div> 
        </div>
        <footer id="xt-kontak" class=" xt-container-dark text-center" style="min-height: 100px;">
            <div class="container mt-3">
                <div class="row" style="font-size:14px;">
                    <div class="col-12 col-md-6 mb-3 order-md-12">
                        <span style="font-size: 17px;">Follow Us</span>
                        <br/>
                        <!-- <a href='http://facebook.com' target='_blank' rel='noopener noreferrer'><FontAwesomeIcon icon={faFacebook} size='2x' className='mr-2 ml-2'/></a> -->
                        <a href='http://www.instagram.com/xt_radio' target='_blank' rel='noopener noreferrer'><i class="fab fa-instagram fa-2x mr-2 ml-2"></i></a>
                        <a href='http://twitter.com/xt_radio' target='_blank' rel='noopener noreferrer'><i class="fab fa-twitter fa-2x mr-2 ml-2"></i></a>
                    </div>
                    <div class="col-12 col-md-6 mb-3 mt-md-3 order-md-1">
                        &copy; <?php echo date('Y')?> XT Radio - Only Fly For  Freedom
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-timezone-with-data.js"></script>

    <script type="text/javascript">
        var radioAudio = document.getElementById("xt-player-audio");
        var isPlaying = false;
        var isVolumeHigh = true;

        function checkAcara()
        {
            var now = moment().tz('Asia/Jakarta');
            var now_s = now.format("YYYY-MM-DD");

            var acaraBMX_min = moment(now_s+" 08:00:00 +07:00", "YYYY-MM-DD HH:mm:ss Z");
            var acaraBMX_max = moment(now_s+" 09:59:59 +07:00", "YYYY-MM-DD HH:mm:ss Z");

            var acaraLeyeh_min = moment(now_s+" 12:00:00 +07:00", "YYYY-MM-DD HH:mm:ss Z");
            var acaraLeyeh_max = moment(now_s+" 13:59:59 +07:00", "YYYY-MM-DD HH:mm:ss Z");

            var acaraKuper_min = moment(now_s+" 16:00:00 +07:00", "YYYY-MM-DD HH:mm:ss Z");
            var acaraKuper_max = moment(now_s+" 17:29:59 +07:00", "YYYY-MM-DD HH:mm:ss Z");

            var acara7PM_min = moment(now_s+" 19:00:00 +07:00", "YYYY-MM-DD HH:mm:ss Z");
            var acara7PM_max = moment(now_s+" 20:59:59 +07:00", "YYYY-MM-DD HH:mm:ss Z");

            console.log("NOW: "+ now.format());
            
            if(now.format("d")>=1 && now.format("d")<=5)
            {
                if(now.format("H")>=8 && now.format("H")<21)
                {
                    if(now.diff(acaraBMX_min)>0 && acaraBMX_max.diff(now)>0)
                    {
                        $("#acara_text").html("BMX");
                    }
                    else if(now.diff(acaraLeyeh_min)>0 && acaraLeyeh_max.diff(now)>0)
                    {
                        $("#acara_text").html("Leyeh - Leyeh");
                    }
                    else if(now.diff(acaraKuper_min)>0 && acaraKuper_max.diff(now)>0)
                    {
                        $("#acara_text").html("Kuper Berad");
                    }
                    else if(now.diff(acara7PM_min)>0 && acara7PM_max.diff(now)>0)
                    {
                        $("#acara_text").html("7PM");
                    }
                    else
                    {
                        $("#acara_text").html("Music Time");
                    }
                }
                else
                {
                    $("#acara_text").html("-");
                }
            }
            else
            {
                $("#acara_text").html("-");
            }
// 	  $("#acara_text").html("LIBUR SAMPAI 17 JUNI 2019");
            setTimeout(checkAcara, 60000);
        }

        function checkLivestreaming(){
            var channelId = "UCqyYrbhDar48h7-mj1RNb2g";
            var kunciGeni = "AIzaSyByS2fDWX22pUxGG_KqwnVJu4aW-641h8s";

            $.ajax({
                url: "https://www.googleapis.com/youtube/v3/search?part=snippet&channelId="+channelId+"&type=video&eventType=live&key="+kunciGeni,
                type: 'GET',
                success: function(data, textStatus, jqXHR){
                    if(data.pageInfo.totalResults > 0){
                        $("#livestreaming-container").removeClass("d-none");
                        $("#livestreaming-container").addClass("d-block");
                        var item = data.items[0];
                        
                        $("#youtube-container").html('<iframe src="https://www.youtube.com/embed/'+item.id.videoId+'" frameborder="0" allowfullscreen width="100%" height="400px"></iframe>');
                    }
                    else
                    {
                        $("#livestreaming-container").removeClass("d-block");
                        $("#livestreaming-container").addClass("d-none");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                    $("#livestreaming-container").removeClass("d-block");
                    $("#livestreaming-container").addClass("d-none");
                }
            });

        }

        $(document).ready(function(){
            checkAcara();


            $("#xt-player-button-play").click(function(e){
                if(isPlaying)
                {
                    radioAudio.pause();
                    isPlaying = false;
                }
                else
                {
                    radioAudio.play();
                    isPlaying = true;
                }
                updateState();
            });
            $("#xt-player-button-volume").click(function(e){
                if(isVolumeHigh)
                {
                    radioAudio.volume = 0;
                    isVolumeHigh = false;
                }
                else
                {
                    radioAudio.volume = 1;
                    isVolumeHigh = true;
                }
                updateState();
            });
            $('[data-toggle="tooltip"]').tooltip();

            $('a[href^="#"]').click(function(e){
                $('html,body').animate({ scrollTop: jQuery(this.hash).offset().top-55}, 400);
            });

            checkLivestreaming();
        });

        function updateState(){
            if(isPlaying)
            {
                $("#xt-player-button-play").html('<i class="fas fa-stop fa-1x"></i><br/>Stop');
            }
            else
            {
                $("#xt-player-button-play").html('<i class="fas fa-play fa-1x"></i><br/>Play');
            }

            if(isVolumeHigh)
            {
                $("#xt-player-button-volume").html('<i class="fas fa-volume-up fa-1x"></i><br/>100%');
            }
            else
            {
                $("#xt-player-button-volume").html('<i class="fas fa-volume-mute fa-1x"></i><br/>Mute');
            }
        }
    </script>
  </body>
</html>