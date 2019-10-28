@extends('base.beta')
@section('container')
<div class="container text-center w-100" id="livestream-container">
    <h3 class="w-100">Memuat data</h3>
</div>
@endsection
@section('assetscss')
    
@endsection
@section('assetsjs')
    <script type="text/javascript">
        var channel = "UCqyYrbhDar48h7-mj1RNb2g";
        // var channel = "UC_8P5Hal2ZFurdnfazrnHBA";
        var kunciGeni = "AIzaSyByS2fDWX22pUxGG_KqwnVJu4aW-641h8s";
        function loadLivestream(){
            axios
                .get('https://www.googleapis.com/youtube/v3/search?part=snippet&channelId='+this.channel+'&type=video&eventType=live&key='+this.kunciGeni, {
                    'timeout': 30000
                })
                .then(response => {
                    /* eslint-disable no-console */
                    // console.log(response.data);
                    var data = response.data;
                    var item = data.items[0];
                    if(data.pageInfo.totalResults > 0){
                        document.getElementById("livestream-container").innerHTML = "<iframe src=\"https://www.youtube.com/embed/"+item.id.videoId+"\" frameborder=\"0\" allowfullscreen width=\"100%\" height=\"460px\"></iframe>";
                    }
                    else
                    {
                        document.getElementById("livestream-container").innerHTML = "<h3 class=\"w-100\">Tidak ada livestreaming</h3>";
                    }
                })
                .catch(e => {
                    /* eslint-disable no-console */
                    document.getElementById("livestream-container").innerHTML = "<h3 class=\"w-100\">Gagal. "+e.message+"</h3>";
                });
        }

        $(document).ready(function(){
            loadLivestream();
        });
    </script>
@endsection