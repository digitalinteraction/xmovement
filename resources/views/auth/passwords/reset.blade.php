@extends('layouts.app', ['bodyclasses' => 'colorful'])

@section('content')

    <div class="page-header">
        
        <h2 class="main-title">Reset Password</h2>

    </div>

    <div class="container">
        <div class="row">
            
            <div class="auth-panel">
            
                <form class="auth-form" role="form" method="POST" action="{{ url('/password/reset') }}">
                    {!! csrf_field() !!}

                    <input type="hidden" name="token" value="{{ $token }}">

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
                        <label class="control-label">New Password</label>

                        <input type="password" class="form-control input-field" name="password" value="{{ old('password') }}" placeholder="New Password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="control-label">Confirm Password</label>

                        <input type="password_confirmation" class="form-control input-field" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group">
                    
                        <button type="submit" class="btn btn-primary">
                            Reset Password
                        </button>

                    </div>

                </form>


            </div>
        </div>
    </div>

@endsection