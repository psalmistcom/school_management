@extends('auth.auth-layout')

@section('auth_name')
    <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{ url('/login') }}" method="post">
            @csrf
            {{ csrf_field() }}
            <div class="input-group mb-3">
                <input type="email" class="form-control" required name="email" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" required name="password" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <p class="mb-1">
            <a href="{{ url('forgot-password') }}">I forgot my password</a>
        </p>

    </div>
    <!-- /.card-body -->
@endsection
