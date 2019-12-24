@extends('base.admin')
@section('title')
    Jadwal
@endsection
@section('container')
    <div class="row">
        <div class="col-12 mb-5">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <h3 class="mb-0">Daftar acara</h3>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Jam</th>
                            <th scope="col"></th>
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
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="/admin/jadwal/{{$jadwal->id}}/hapus">Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <h3 class="mb-0">Tambah acara</h3>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <form method="post" action="/admin/jadwal" class="">
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
            </div>
        </div>
    </div>
    <script type="text/javascript">

    </script>
@endsection

