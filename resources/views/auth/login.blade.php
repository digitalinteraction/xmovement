@extends('layouts.colorful')

@section('content')

    <div class="page-header">
        
        <h2 class="main-title">Log In</h2>

    </div>

    <div class="container">
        <div class="row">
            
            <div class="auth-panel">
            
                <form class="auth-form" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="control-label">Email Address</label>

                        <input type="email" class="form-control input-field" name="email" value="{{ old('email') }}" placeholder="Email">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="control-label">Password</label>

                        <input type="password" class="form-control input-field" name="password" placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group visuallyhidden">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                    
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>

                        <br />
                        
                        <a class="btn btn-link forgot-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                    
                    </div>
                    
                    <div class="text-linethru">
                        <div class="line"></div>
                        <div class="text">or</div>
                    </div>

                    <div class="form-group">
                        <a class="btn btn-facebook" href="{{ action('Auth\AuthController@redirectToProvider') }}">
                            <i class="fa fa-facebook"></i>
                            Log in with Facebook
                        </a>
                    </div>

                </form>


            </div>
        </div>
    </div>

@endsection
