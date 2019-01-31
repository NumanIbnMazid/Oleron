@extends('admin.a_layouts.a_app')

@section('a-title')
	Add New Page
@endsection

@section('a-content')

	<section class="forms">
		<div class="container-fluid">
			<div class="row">

				{{-- Form Section Starts Here --}}
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header d-flex align-items-center">
							<h4>Add New Page</h4>
						</div>
						<div class="card-body">
							<p>You must fill up all the fields that are marked with * sign.</p>

							{{-- Form Content starts here --}}
							{!! Form::open( ['route' => 'create-page.store','enctype'=>'multipart/form-data'] ) !!}
							{!! csrf_field() !!}

							<div class="form-group">
								{{ Form::label('title', 'Page Title : *') }}
								{{ Form::text('title',null, ['class'=>'form-control', 'placeholder'=>'Enter Page Title']) }}
							</div>

							<div class="form-group">
								{{ Form::label('description', 'Short Description : *') }}
								{{ Form::text('description',null, ['class'=>'form-control', 'placeholder'=>'Enter Page Short Description']) }}
							</div>

							<div class="form-group">
								{{ Form::label('content', 'Page Content : *') }}
								{{ Form::textarea('content',null, ['class'=>'form-control', 'placeholder'=>'Enter Page Content', 'id' => 'summary-ckeditor']) }}
							</div>

							{{-- CKEDITOR Scripts Starts Here --}}
							<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
							<script>
							CKEDITOR.replace( 'summary-ckeditor' );
							</script>
							{{-- CKEDITOR Scripts Ends Here --}}

							<div class="form-group">
								{{ Form::label('publication_status', 'Status : *') }}
								{{ Form::select('publication_status',[1=>'Published', 0=>'Unpublished'],1, ['class'=>'form-control']) }}
							</div>

							<div class="form-group">
								{{ Form::submit('Create Page', ['class' => 'btn btn-primary']) }}
							</div>

							{!! Form::close() !!}
							{{-- Form Content starts here --}}

						</div>
					</div>
				</div>
				{{-- Form Section Ends Here --}}

				{{-- Display Pages Section Starts Here --}}
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<h4>All Pages</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">

								<table id="example" class="display" style="width:100%">
									<thead>
										<tr>
											<th>#SL No</th>
											<th>Page Title</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>

									<tfoot>
										<tr>
											<th>#SL No</th>
											<th>Page Title</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</tfoot>

									<tbody>

										@if(count($pg_id) > 0)
											@foreach($pg_id as $page)

												<tr>
													<td></td>
													<td>{{ $page -> page_title }}</td>
														<td>
															@if($page -> publication_status == 1)
																<span class="badge badge-success">Published</span>
															@else
																<span class="badge badge-warning">Unpublished</span>
															@endif
														</td>
													<td>
														<!-- Button to Open the Modal -->
														<div style="display: flex;">
															<a class="btn btn-info" href="/create-page/{{$page->id}}/edit" style="margin-right:5px;">
																Modify
															</a>

															{!! Form::open(['route'=>['create-page.destroy', $page->id],'method'=>'DELETE']) !!}
															{!! Form::submit('Delete', ['class' => 'btn btn-danger', 'style'=>'margin-right:5px;']) !!}
															{!! Form::close() !!}

															<a href="{{ url("/sidebar-menu-item/{$page->id}") }}" class="btn btn-success" target="_blank">View</a>
														</div>
													</td>
												</tr>

											@endforeach

										</tbody>

									@else
										<div class="alert alert-warning">
											<p>Oops, There has no Pages !!!</p>
										</div>
									@endif

								</table>

								{{-- Laravel Pagination --}}
								{{-- {!!$pg_id->links()!!} --}}

							</div>

						</div>

					</div>
				</div>
				{{-- Display Pages Section Ends Here --}}

			</div>
		</div>
	</section>

	{{-- Auto Increment Serial Number in Table --}}
	{{-- <script type="text/javascript">
	var table = document.getElementsByTagName('table')[0],
	rows = table.getElementsByTagName('tr'),
	text = 'textContent' in document ? 'textContent' : 'innerText';

	for (var i = 1, len = rows.length; i < len; i++){
	rows[i].children[0][text] = i + ' ' + rows[i].children[0][text];
}
</script> --}}

@endsection
