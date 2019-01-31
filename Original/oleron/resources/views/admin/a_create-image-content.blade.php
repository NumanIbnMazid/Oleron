@extends('admin.a_layouts.a_app')

@section('a-title')
	Create Attachment Containing Page
@endsection

@section('a-content')

	<section class="forms">
		<div class="container-fluid">
			<div class="row">

				{{-- Form Section Starts Here --}}
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header d-flex align-items-center">
							<h4>Add Attachment Page</h4>
						</div>
						<div class="card-body">
							<p>You must fill up all the fields that are marked with * sign.</p>

							{{-- Form Content starts here --}}
							{!! Form::open( ['route' => 'create-image-content.store','enctype'=>'multipart/form-data'] ) !!}
							{!! csrf_field() !!}

							<div class="form-group">
								{{ Form::label('title', 'Page Title : *') }}
								{{ Form::text('title',null, ['class'=>'form-control', 'placeholder'=>'Enter Page Title']) }}
							</div>

							<div class="form-group">
								{{ Form::label('appear_on', 'Appear on : *') }}
								{{ Form::select('appear_on',[1=>'Sidebar', 0=>'Menu'],1, ['class'=>'form-control']) }}
							</div>

							<div class="card-body" style="background: #bed4f7">
								<h4 class="text-center" style="margin-bottom: 15px;">[ Item 1 ]</h4>
								<div class="form-group" style="overflow:scroll;">
		                            {{ Form::label('image', 'Attachment : ') }}
		                            {{ Form::file('image',null, ['class'=>'form-control', 'placeholder'=>'Please attach your file','aria-describedby'=>'fileHelp']) }}
		                            <small id="fileHelp" class="form-text text-muted">Please upload a valid file. Size of file should not be more than 2MB.</small>
		                        </div>	                 
								<div class="form-group">
									{{ Form::label('content', 'Content : ') }}
									{{ Form::textarea('content',null, ['class'=>'form-control', 'placeholder'=>'Enter Page Content', 'id' => 'summary-ckeditor']) }}
								</div>
								{{-- CKEDITOR Scripts Starts Here --}}
								<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
								<script>
								CKEDITOR.replace( 'summary-ckeditor' );
								</script>
								{{-- CKEDITOR Scripts Ends Here --}}
							</div>


							<div class="card-body" style="background: #c3f7f5">
								<h4 class="text-center" style="margin-bottom: 15px;">[ Item 2 ]</h4>
								<div class="form-group" style="overflow:scroll;">
		                            {{ Form::label('image2', 'Attachment : ') }}
		                            {{ Form::file('image2',null, ['class'=>'form-control', 'placeholder'=>'Please attach your file','aria-describedby'=>'fileHelp']) }}
		                            <small id="fileHelp" class="form-text text-muted">Please upload a valid file. Size of file should not be more than 2MB.</small>
		                        </div>
								<div class="form-group">
									{{ Form::label('content2', 'Content : ') }}
									{{ Form::textarea('content2',null, ['class'=>'form-control', 'placeholder'=>'Enter Page Content', 'id' => 'summary-ckeditor2']) }}
								</div>
								{{-- CKEDITOR Scripts Starts Here --}}
								<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
								<script>
								CKEDITOR.replace( 'summary-ckeditor2' );
								</script>
								{{-- CKEDITOR Scripts Ends Here --}}
							</div>


							<div class="card-body" style="background: #cee8b9">
								<h4 class="text-center" style="margin-bottom: 15px;">[ Item 3 ]</h4>
								<div class="form-group" style="overflow:scroll;">
		                            {{ Form::label('image3', 'Attachment : ') }}
		                            {{ Form::file('image3',null, ['class'=>'form-control', 'placeholder'=>'Please attach your file','aria-describedby'=>'fileHelp']) }}
		                            <small id="fileHelp" class="form-text text-muted">Please upload a valid file. Size of file should not be more than 2MB.</small>
		                        </div>
								<div class="form-group">
									{{ Form::label('content3', 'Content : ') }}
									{{ Form::textarea('content3',null, ['class'=>'form-control', 'placeholder'=>'Enter Page Content', 'id' => 'summary-ckeditor3']) }}
								</div>
								{{-- CKEDITOR Scripts Starts Here --}}
								<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
								<script>
								CKEDITOR.replace( 'summary-ckeditor3' );
								</script>
								{{-- CKEDITOR Scripts Ends Here --}}
							</div>


							<div class="card-body" style="background: #cdb9e8">
								<h4 class="text-center" style="margin-bottom: 15px;">[ Item 4 ]</h4>
								<div class="form-group" style="overflow:scroll;">
		                            {{ Form::label('image4', 'Attachment : ') }}
		                            {{ Form::file('image4',null, ['class'=>'form-control', 'placeholder'=>'Please attach your file','aria-describedby'=>'fileHelp']) }}
		                            <small id="fileHelp" class="form-text text-muted">Please upload a valid file. Size of file should not be more than 2MB.</small>
		                        </div>
								<div class="form-group">
									{{ Form::label('content4', 'Content : ') }}
									{{ Form::textarea('content4',null, ['class'=>'form-control', 'placeholder'=>'Enter Page Content', 'id' => 'summary-ckeditor4']) }}
								</div>
								{{-- CKEDITOR Scripts Starts Here --}}
								<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
								<script>
								CKEDITOR.replace( 'summary-ckeditor4' );
								</script>
								{{-- CKEDITOR Scripts Ends Here --}}
							</div>



							

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
							<h4>All Attachment Pages</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">

								<table id="example" class="display" style="width:100%">
									<thead>
										<tr>
											<th>#SL No</th>
											<th>Page Title</th>
											<th>Status</th>
											<th>Appear on</th>
											<th>Action</th>
										</tr>
									</thead>

									<tfoot>
										<tr>
											<th>#SL No</th>
											<th>Page Title</th>
											<th>Status</th>
											<th>Appear on</th>
											<th>Action</th>
										</tr>
									</tfoot>

									<tbody>

										@if(count($pg_id) > 0)
											@foreach($pg_id as $page)

												<tr>
													<td></td>
													<td>{{ $page -> title }}</td>
													<td>
														@if($page -> publication_status == 1)
															<span class="badge badge-success">Published</span>
														@else
															<span class="badge badge-warning">Unpublished</span>
														@endif
													</td>
													<td>
														@if($page -> appear_on == 1)
															<span class="badge badge-success">Sidebar</span>
														@else
															<span class="badge badge-warning">Menu</span>
														@endif
													</td>
													<td>
														<!-- Button to Open the Modal -->
														<div style="display: flex;">
															<a class="btn btn-info" href="/create-image-content/{{$page->id}}/edit" style="margin-right:5px;">
																Modify
															</a>

															{!! Form::open(['route'=>['create-image-content.destroy', $page->id],'method'=>'DELETE']) !!}
															{!! Form::submit('Delete', ['class' => 'btn btn-danger', 'style'=>'margin-right:5px;']) !!}
															{!! Form::close() !!}

															<a href="{{ url("custom-page-view/{$page->id}") }}" class="btn btn-success" target="_blank">View</a>
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

								{{-- Laravel Pagination
								{{-- {!!$pg_id->links()!!} --}}

							</div>

						</div>

					</div>
				</div>
				{{-- Display Pages Section Ends Here --}}

			</div>
		</div>
	</section>

@endsection
