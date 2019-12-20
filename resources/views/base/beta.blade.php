<!DOCTYPE html>
<html>
    <head>
        <!-- HTML Meta Tags -->
        <title>XT Radio - Only Fly For Freedom</title>
        <meta name="description" content="XT Radio - Only Fly For Freedom">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico" />

        <!-- Google / Search Engine Tags -->
        <meta name="google" content="notranslate" />
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

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <!-- Custom CSS -->
        <style type="text/css">
            body{
                background-color: #212121;
                color: rgba(255,255,255,0.7);
            }
            .wrapper{
                background-color: #212121;
                color: rgba(255,255,255,0.7);
                min-height: calc(100vh);
                min-width: 300px;

                font-family: 'Avenir', Helvetica, Arial, sans-serif;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                text-align: center;
                color: #2c3e50;
            }
            #bottom-navbar .navbar-nav {
                display:table;
                table-layout: fixed;
            }
            #bottom-navbar .navbar-nav > li{
                display:table-cell;
                text-align: center;
            }
            #bottom-navbar .navbar-nav > li > a{
                padding: 0px;
            }
            #footer{
                color: #fff;
                font-size: 0.8rem;
                line-height: 3rem;
            }
            #social-media a{
                color: #007bff;
            }
            #social-media a:hover{
                color: #0056b3;
            }
            #view{
                color: #eee;
                min-height: calc(100vh - 10px);
                padding-top: 10px;
                padding-bottom: 70px;
            }
            @media (min-width: 768px) {
                #view{
                    min-height: calc(100vh - 147px);
                    padding-bottom: 30px;
                    max-width: 1023px;
                }
            }
            #atensi{
                position: fixed;
                top: 300px;
                right: 4px;
                z-index: 10000;
                color: #fff;
                opacity: 0.6;
                cursor: pointer;
                transition: all 0.2s;
            }
            #atensi:hover{
                opacity: 1;
            }
            #button-atensi{
                background-color: #ff6f00;
                border-radius: 50%;
                padding: 8px;
                text-align: center;
                width: 63px;
                height: 63px;
                line-height: 6px;
            }
        </style>
        @section('assetscss')
        
        @show
    </head>
    <body>
        <div class="wrapper">
            <audio ref="audio" nocontrols id="audio-player" preload="auto">
                Your browser does not support the audio element.
            </audio>
            <nav id="top-navbar" class="navbar navbar-dark navbar-expand-md d-none d-md-block">
                <div class="container">
                    <img src="/assets/images/xt-logo.png" style="width: 50px; height: 50px;">
                    <a class="navbar-brand" href="/">&nbsp; XT Radio</a>
                    <div class="navbar-collapse" id="nav_collapse">
                        <div class="mr-auto"></div>
                        <ul class="navbar-nav">
                            @if(\Illuminate\Support\Facades\Request::is("/"))
                                <li class="nav-item active">
                            @else
                                <li class="nav-item" >
                            @endif
                                <a class="nav-link" href="/">Play</a>
                            </li>
                            @if(\Illuminate\Support\Facades\Request::is("livestream"))
                                <li class="nav-item active">
                            @else
                                <li class="nav-item" >
                            @endif
                                <a class="nav-link" href="/livestream">Video Livestream</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="view" class="m-auto">
            @section('container')
            
            @show
            </div>

            <div id="atensi" class="text-right">
                <div id="button-atensi" data-toggle="modal" data-target="#modalAtensi">
                    <i class="fas fa-envelope fa-2x"></i>
                    <br/>
                    <span style="font-size: 0.7em;">Atensi</span>
                </div>
                <div class="modal fade" id="modalAtensi" tabindex="-1" role="dialog" aria-labelledby="modalAtensi" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-dark" style="padding: 8px 16px;">
                                <h5 class="modal-title" id="modalAtensiLabel">Atensi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding: 8px 16px; margin: -4px -16px -8px 0px;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=6281391110068&text=&source=&data="
                                        style="display: flex; align-items: center; text-decoration: none;justify-content: center;" class="text-center">
                                        <i class="fab fa-whatsapp fa-2x"></i>
                                        &nbsp;
                                        +62 813 9111 0068
                                    </a>
                                </div>
                                <br/>
                                <div>
                                    <a target="_blank" href="https://twitter.com/intent/tweet?text=@XT_RADIO"
                                        style="display: flex; align-items: center; text-decoration: none;justify-content: center;" class="text-center">
                                        <i class="fab fa-twitter fa-2x"></i>
                                        &nbsp;
                                        @XT_RADIO
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalAbout" tabindex="-1" role="dialog" aria-labelledby="modalAtensiLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-dark" style="padding: 8px 16px;">
                                <h5 class="modal-title" id="modalAtensiLabel">XT Radio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding: 8px 16px; margin: -4px -16px -8px 0px;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-dark text-center">
                                <div class="social-media">
                                    <div style="line-height: 1rem;">
                                        Follow us
                                    </div>
                                    <div style="height: 28px;">
                                        <a href="http://twitter.com/xt_radio" target="_blank">
                                            <i class="fab fa-twitter fa-2x"></i>
                                        </a>
                                        &nbsp;
                                        <a href="http://www.instagram.com/xt_radio" target="_blank">
                                            <i class="fab fa-instagram fa-2x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="footer" class="d-none d-md-block bg-dark">
                <div class="container d-flex" style="min-height: 80px;" >
                    <div class="row m-0 align-items-center" style="width: 100%;">
                        <div class="col col-6 order-md-6 text-md-right p-0">
                            <div class="social-media">
                                <div style="line-height: 1rem;">
                                    Follow us
                                </div>
                                <div style="height: 28px;">
                                    <a href="http://twitter.com/xt_radio" target="_blank">
                                        <i class="fab fa-twitter fa-2x"></i>
                                    </a>
                                    &nbsp;
                                    <a href="http://www.instagram.com/xt_radio" target="_blank">
                                        <i class="fab fa-instagram fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-6 order-md-1 text-md-left p-0" style="font-size: 14px;">
                            &copy; {{date('Y')}} XT Radio - Only Fly For Freedom
                        </div>
                    </div>
                </div>
            </div>
            <nav id="bottom-navbar" class="navbar navbar-dark d-md-none fixed-bottom bg-dark">
                <ul class="navbar-nav w-100 nav-pils">
                    @if(\Illuminate\Support\Facades\Request::is("/"))
                        <li class="nav-item active">
                    @else
                        <li class="nav-item" >
                    @endif
                        <a class="nav-link" href="/">
                            <i class="fas fa-music"></i><br/>
                            Play
                        </a>
                    </li>
                    @if(\Illuminate\Support\Facades\Request::is("livestream"))
                        <li class="nav-item active">
                    @else
                        <li class="nav-item" >
                    @endif
                        <a class="nav-link" href="/livestream">
                            <i class="fas fa-video"></i><br/>
                            Video Live
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalAbout">
                            <i class="fas fa-info"></i><br/>
                            XT Radio
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js" integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script>
        @section('assetsjs')
            
        @show
    </body>    
</html>
