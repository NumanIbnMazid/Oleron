@extends('admin.a_layouts.a_app')

@section('a-title')
	Mail Messages
@endsection

@section('a-content')

	<section class="forms">
		<div class="container-fluid">
			<div class="row">

				{{-- Display Pages Section Starts Here --}}
				<div class="container">
					<div class="card">
						<div class="card-header">
							<h4>Mails</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">

								<table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
									<thead>
										<tr>
											<th>#SL No</th>
											<th>Name</th>
											<th>Email</th>
											<th>Service</th>
											<th>Attachment</th>
											<th>Message</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>

									<tfoot>
										<tr>
											<th>#SL No</th>
											<th>Name</th>
											<th>Email</th>
											<th>Service</th>
											<th>Attachment</th>
											<th>Message</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</tfoot>

									<tbody>

										@if(count($mails) > 0)
											@foreach($mails as $mail)

												<tr>
													<td></td>
													<td>{{ $mail -> name }}</td>
													<td>{{ $mail -> email }}</td>

													<td>
														{{-- {{ $mail -> service }} --}}
														@if($mail -> service == 0)
														    <span style="font-family: Bahnschrift;color: #00a4ba;"> "Custom" </span>
														@endif

														@if($mail -> service == 1)
														    <span style="font-family: Bahnschrift;color: #00a4ba;"> "Legal Opinion" </span>
														@endif

														@if($mail -> service == 2)
														    <span style="font-family: Bahnschrift;color: #00a4ba;"> "Legal Documentation" </span>
														@endif

														@if($mail -> service == 3)
														   <span style="font-family: Bahnschrift;color: #00a4ba;"> "Legal Research" </span>
														@endif

														@if($mail -> service == 4)
														   <span style="font-family: Bahnschrift;color: #00a4ba;"> "Court/Advocate" </span>
														@endif
													</td>

													@if($mail->attachment != null)
													<td {{-- id="textLimit" --}}>
														{{-- <div>{{ $mail -> attachment }}</div> --}}
														<a href="{{ url("/download-attachment/{$mail->id}") }}" class="btn btn-info">Download</a>
													</td>
													@else
													<td><span class="badge badge-warning">No file attached</span></td>
													@endif

													@if($mail->message != null)
													{{-- <td><span id ="textLimit">{{ $mail -> message }}</span></td> --}}
													<td><a href="{{ url("/view-message/{$mail->id}") }}" class="btn btn-info">View</a></td>
													@else
													<td><span class="badge badge-warning">No Message sent</span></td>
													@endif
													
													@if($mail->status == 0)
													<td class="badge badge-warning">Undone</td>
													@else
													<td class="badge badge-success">Done</td>
													@endif

													<td>
														<!-- Button to Open the Modal -->
														<div style="display: flex;">
															{!! Form::open(['url'=>['delete-mail', $mail->id],'method'=>'post']) !!}
															{!! Form::submit('Delete', ['class' => 'btn btn-danger', 'style'=>'margin-right:5px;']) !!}
															{!! Form::close() !!}
															
															<a href="{{ url("/mark-mail/{$mail->id}") }}" class="btn btn-primary">Mark</a>
															{{-- <a href="{{ url("/sidebar-menu-item/{$page->id}") }}" class="btn btn-success" target="_blank">View</a> --}}
														</div>
													</td>
												</tr>

											@endforeach

										</tbody>

									@else
										<div class="alert alert-warning">
											<p>Oops, You have no incoming mails yet !!!</p>
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

@endsection