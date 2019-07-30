@extends('base.base')
@section('container')
    <div class="container">
        <div style="max-width: 500px; margin: 0 auto;">
            <h1>Login</h1>
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
@endsection