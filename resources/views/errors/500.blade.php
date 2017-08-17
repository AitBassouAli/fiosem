@extends('errors.error')

	@section('error-status')
		500
	@stop

	<div class="text-align-center error-500">
		@section('error-message')
			<p><strong>Sorry - Page Not Found!</strong></p>
	          <p>The page you are looking for was moved, removed, renamed<br>or might never existed. You stumbled upon a broken link :(</p>
		@stop
	</div>
