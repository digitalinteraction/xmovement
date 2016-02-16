<form class="auth-form" role="form" method="POST" action="{{ url('/details') }}">
    {!! csrf_field() !!}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label class="control-label">Name</label>

        <div class="">
            <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" placeholder="Name">

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
            <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" placeholder="Email">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

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
    </div>

</form>