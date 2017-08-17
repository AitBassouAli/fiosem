	@extends('errors.error')

	@section('error-status')
		404
	@stop

	<div class="text-align-center error-404">
		@section('error-message')
			<p><strong>Sorry - Page Not Found!</strong></p>
	          <h5><p>The page you are looking for was moved, removed, renamed<br>or might never existed. You stumbled upon a broken link :(</p></h5>
		@stop
	</div>
