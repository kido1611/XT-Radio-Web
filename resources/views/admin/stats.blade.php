@extends('base.base')
@section('titile')
    XT Radio - Stats
@endsection
@section('container')
    <div class="container p-3">
        <input id="tanggalpicker" class="form-control" type="text" name="tanggal" value="{{$tanggal}}" />
        <canvas id="canvas"></canvas>
    </div>
    <script type="text/javascript">
        var data = {!! $data !!};

        var dataLabel = [];
        var dataListener = [];
        var dataListenerPeak = [];

        for(var i = 0; i< data.length; i++){
            dataLabel.push(data[i].tanggal);
            dataListener.push(data[i].listener);
            dataListenerPeak.push(data[i].listener_peak);
        }

        var config = {
            type: 'line',
            data: {
                labels: dataLabel,
                datasets: [{
                    label: "Listener",
                    borderColor: 'rgb(255, 99, 132)',
                    backgroundColor: 'rgb(255, 99, 132)',
                    fill: false,
                    data: dataListener
                }, {
                    label: "Listener Peak",
                    borderColor: 'rgb(54, 162, 235)',
                    backgroundColor: 'rgb(54, 162, 235)',
                    fill: false,
                    data: dataListenerPeak
                }]
            },
            options: {
                responsive: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
				title: {
					display: true,
					text: 'XT Radio Listener Stats - {{$tanggal}}'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
                scales: {
                    xAxes: [{
                        type: 'time',
                        distribution: 'linear',
                        scaleLabel: {
							display: true,
							labelString: 'Datetime'
                        },
                        time: {
                            min: '{{$tanggal}} 07:30:00',
                            max: '{{$tanggal}} 21:30:00',
                            unit: 'minute',
                            displayFormats: {
                                minute: 'HH:mm'
                            }
                        }
                    }],
                    yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Listener'
                        }
					}]
                }
            }
        };

        window.onload = function(){
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };

        $(document).ready(function(){
            $("#tanggalpicker").daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                "singleDatePicker": true,
                "minDate": "{{$tanggal_min}}",
            }, function(start, end, label) {
                window.location.href="{{url('/admin/stats')}}?tanggal="+start.format("YYYY-MM-DD");
            });
        });

    </script>
@endsection

@section('assetscss')
    <link rel="stylesheet" href="/assets/css/chart.min.css">
    <link rel="stylesheet" href="/assets/css/daterangepicker.css">
@endsection
@section('assetsjs')
    <script src="/assets/js/chart.bundle.min.js"></script>
    <script src="/assets/js/moment.js"></script>
    <script src="/assets/js/daterangepicker.js"></script>
@endsection