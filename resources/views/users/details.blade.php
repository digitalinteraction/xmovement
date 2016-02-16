@extends('layouts.app', ['bodyclasses' => 'colorful'])

@section('content')

    <div class="page-header">
        
        <h2 class="main-title">Add some details</h2>

    </div>

    <div class="container">
        <div class="row">
            
            <div class="auth-panel">

                <form class="auth-form" role="form" method="POST" action="{{ url('/details') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                        <label class="control-label">Bio</label>

                        <div class="">
                            <input type="text" class="form-control" name="bio" value="{{ old('bio', $user->bio) }}" placeholder="Say something about yourself">

                            @if ($errors->has('bio'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('bio') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label class="control-label">Phone Number</label>

                        <div class="">
                            <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="Your phone number">

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                        <br />
                        <a class="btn btn-link login-link" href="{{ url('/profile') }}">Skip for now</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
