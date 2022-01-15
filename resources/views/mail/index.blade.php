@extends('layouts.app')
@section('content')
	<div class="flex">
		@include('menu_parts.nav_mail')
		@include('mail.search_mail')
	</div>
@endsection