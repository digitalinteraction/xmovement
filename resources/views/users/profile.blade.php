@extends('layouts.app')

@section('content')

	<div class="fluid-row profile-header">

	</div>

	<div class="container-fluid">
		
		<div class="row">

			@include('users.profile-left-column')

			@include('users.profile-center-column')

			@include('users.profile-right-column')
	
		</div>
	
	</div>

@endsection