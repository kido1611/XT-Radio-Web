@extends('base.base')
@section('titile')
    XT Radio - Jadwal
@endsection
@section('container')
    <div class="container p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Jadwal</li>
            </ol>
        </nav>
        <h3>Daftar acara</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Hari</th>
                <th scope="col">Jam</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($data as $jadwal)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$jadwal->nama}}</td>
                    <td>
                        @php
                            $hariString = array_map(function($value){
                                 if((int)$value == 1){
                                     return "Senin";
                                 }
                                 else if((int)$value == 2){
                                     return "Selasa";
                                 }
                                 else if((int)$value == 3){
                                     return "Rabu";
                                 }
                                 else if((int)$value == 4){
                                     return "Kamis";
                                 }
                                 else if((int)$value == 5){
                                     return "Jumat";
                                 }
                             }, explode(',', $jadwal->hari));

                         $hari = implode($hariString,', ');
                         echo $hari;
                        @endphp
                    </td>
                    <td>{{$jadwal->jam_awal.'-'.$jadwal->jam_akhir}}</td>
                    <td><a href="/admin/jadwal/{{$jadwal->id}}/hapus">Hapus</a></td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
            </tbody>
        </table>
        <hr/>
        <h3>Tambah acara</h3>
        <form method="post" action="/admin/jadwal">
            <div class="form-group">
                <label for="nameAcara">Nama acara</label>
                <input type="text" class="form-control" id="nameAcara" name="nama" placeholder="Nama acara" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Hari</label>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="hariCheck1" name="hari[]" checked value="1">
                    <label class="custom-control-label" for="hariCheck1">Senin</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="hariCheck2" name="hari[]" checked value="2">
                    <label class="custom-control-label" for="hariCheck2">Selasa</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="hariCheck3" name="hari[]" checked value="3">
                    <label class="custom-control-label" for="hariCheck3">Rabu</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="hariCheck4" name="hari[]" checked value="4">
                    <label class="custom-control-label" for="hariCheck4">Kamis</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="hariCheck5" name="hari[]" checked value="5">
                    <label class="custom-control-label" for="hariCheck5">Jumat</label>
                </div>
            </div>
            <div class="form-group">
                <label for="jamAwal">Jam Awal</label>
                <input type="text" class="form-control" id="jamAwal" name="jam_awal" placeholder="Jam Awal (xx:xx)" required pattern="([01]?[0-9]{1}|2[0-3]{1}):[0-5]{1}[0-9]{1}">
                <small id="jamAwalHelp" class="form-text text-muted">
                    Jam harus dalam format hh:mm
                </small>
            </div>
            <div class="form-group">
                <label for="jamAkhir">Jam Akhir</label>
                <input type="text" class="form-control" id="jamAkhir" name="jam_akhir" placeholder="Jam Akhir (xx:xx)" required>
                <small id="jamAkhirHelp" class="form-text text-muted">
                    Jam harus dalam format hh:mm
                </small>
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
    <script type="text/javascript">

    </script>
@endsection

@section('assetscss')
    <link rel="stylesheet" href="/assets/css/daterangepicker.css">
@endsection
@section('assetsjs')
    <script src="/assets/js/moment.js"></script>
@endsection
