@extends('auth.auth-layout')

@section('auth_name')
    <div class="card-body">
        <h4 class="login-box-msg">Forgot Password</h4>
        <p class="login-box-msg">Enter your email to continue the process</p>

        @include('_message')

        <form action="" method="post">
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

            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Forgot Password</button>
                </div>
            </div>
        </form>
        <hr />

        <p class="mb-1">
            <a href="{{ url('login') }}">Back to login</a>
        </p>

    </div>
    <!-- /.card-body -->
@endsection
