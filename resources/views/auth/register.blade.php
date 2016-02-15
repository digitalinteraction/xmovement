@extends('layouts.app', ['bodyclasses' => 'colorful'])

@section('content')

    <div class="page-header">
        
        <h2 class="main-title">Register</h2>

    </div>

    <div class="container">
        <div class="row">
            
            <div class="auth-panel">

                    <form class="auth-form" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label">Name</label>

                            <div class="">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label">Email Address</label>

                            <div class="">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="control-label">Password</label>

                            <div class="">
                                <input type="password" class="form-control" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="control-label">Confirm Password</label>

                            <div class="">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                            <br />
                            <a class="btn btn-link login-link" href="{{ url('/login') }}">Already have an account?</a>
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
    </div>
</div>
@endsection
