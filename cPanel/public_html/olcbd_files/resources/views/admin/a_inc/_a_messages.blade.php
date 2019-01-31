<div class="body">

	@if(count($errors) > 0)
		@foreach($errors->all() as $error)

			<div class="alert alert-danger" role="alert">
				<strong>Oh snap!</strong> {{ $error }}
			</div>
			
		@endforeach
	@endif

	@if(session('success'))

		<div class="alert alert-success" role="alert">
		    <strong>Well done!</strong> {{ session('success') }}
		</div>

	@endif

</div>