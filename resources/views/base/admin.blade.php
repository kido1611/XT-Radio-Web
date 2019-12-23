<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
    <link href="/assets/css/tailwind.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    @section('assetscss')

    @show
    <link rel="icon" href="favicon.png">
    <script src="https://kit.fontawesome.com/4825da062f.js" crossorigin="anonymous"></script>
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <title>
        @section('titile')
            XT Radio
        @show
    </title>
</head>
<body class="bg-white">
    <div class="wrapper">
        <nav class="bg-red-500 p-4 flex justify-between">
            <a href="/admin/">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <img class="h-8 w-8 mr-2" height="25" width="25" src="/assets/images/xt-logo.png">
                    <span class="font-semibold text-xl tracking-tight">XT Radio</span>
                </div>
            </a>
            <div class="block lg:hidden">
                <button id="btn-sidebar-toogle" class="flex items-center px-3 py-2 border rounded text-red-200 border-red-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
        </nav>
        <div class="md:flex bg-gray-100" style="min-height: calc(100vh - 64px);">
            <div class="
                                bg-red-600 text-white overflow-y-auto overflow-x-hidden
                                w-full fixed hidden
                                md:mini-sidebar md:static md:block
                                shadow-lg"
                 id="sidebar"
                 style="min-height: calc(100vh - 64px);">
                <div id="sidebar-menu" class="overflow-x-hidden overflow-y-hidden">
                    @include('admin.sidebar')
                </div>
            </div>
            <div class="w-full bg-white h-full p-6">
                @section('container')

                @show
            </div>
        </div>
    </div>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    @section('assetsjs')

    @show
</body>
</html>