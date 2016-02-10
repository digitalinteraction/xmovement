
@extends('layouts.app')

@section('content')
    
    <div class="page-header">
        
        <h2 class="main-title" id="page-title">Name your idea</h2>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="add-idea-form" role="form" method="POST" action="{{ url('/idea') }}">
                    {!! csrf_field() !!}

                    <div class="form-page visible" id="form-page-1">

                        <div class="form-page-content">

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                <label>Choose a name that is short but self explanatory e.g. Open Python Class</label>

                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Idea name">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                            </div>

                            <div class="form-group">
                                <div class="btn btn-primary step-button" data-step="2">Next Step</div>
                            </div>

                        </div>

                    </div>

                    <div class="form-page" id="form-page-2">

                        <div class="form-page-content">

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">

                                <label>Add a short description of your idea, this should include the expected outcomes</label>

                                <textarea name="description" value="{{ old('description') }}" rows="4"></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <div class="btn btn-primary step-button" data-step="3">Next Step</div>
                            </div>

                        </div>

                    </div>

                    <div class="form-page" id="form-page-3">

                        <div class="form-page-content">

                            @include('fileupload')

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Create Idea</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
