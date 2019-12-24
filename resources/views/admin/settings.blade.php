@extends('base.admin')

@section('title')
    Settings
@endsection

@section('container')
    <div class="container mb-5">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <h3 class="mb-0">Settings</h3>
                </div>
            </div>
            <div class="card-body pt-0">
                <form method="post" action="">
                    <div class="row">
                        <div class="col-12">
                            <label class="">Matikan XT player</label><br/>
                            <label class="custom-toggle">
                                <input type="checkbox" name="shutdown" {{$shutdown?"checked":""}}>
                                <span class="custom-toggle-slider rounded-circle"></span>
                            </label>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pesan" name="message" value="{{$message}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="hidden" value="{{csrf_token()}}" name="_token">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection