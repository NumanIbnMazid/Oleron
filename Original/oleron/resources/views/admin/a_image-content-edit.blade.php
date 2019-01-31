@extends('admin.a_layouts.a_app')

@section('a-title')
	Update Attachment Containing Items
@endsection

@section('a-content')

	<section class="forms">
		<div class="container-fluid">
			<div class="row">

				{{-- Form Section Starts Here --}}
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header d-flex align-items-center">
							<h4>Update Attachment Items</h4>
						</div>
						<div class="card-body">
							<p>You must fill up all the fields that are marked with * sign.</p>

							{{-- Form Content starts here --}}
							{!! Form::model( $page_id,['route' => ['create-image-content.update', $page_id->id], 'method'=>'PUT', 'enctype'=>'multipart/form-data'] ) !!}
							{!! csrf_field() !!}

							<div class="form-group">
								{{ Form::label('title', 'Page Title : *') }}
								{{ Form::text('title',$page_id->title, ['class'=>'form-control', 'placeholder'=>'Enter Page Title']) }}
							</div>

							<div class="form-group">
								{{ Form::label('appear_on', 'Appear on : *') }}
								{{ Form::select('appear_on',[1=>'Sidebar', 0=>'Menu'],$page_id->appear_on, ['class'=>'form-control']) }}
							</div>



							<div class="card-body" style="background: #bed4f7">
								<h4 class="text-center" style="margin-bottom: 15px;">[ Item 1 ]</h4>

								<div class="form-group" style="overflow:scroll;">
		                            {{ Form::label('image', 'Attachment : ') }}
		                            <script>
									function myFunction() {
									    document.getElementById("file").name = 'image';
									    document.getElementById("file").type = 'file';
									    document.getElementById("undo").type = 'button';
									}
									function myFunction2() {
									    document.getElementById("file").name = '';
									    document.getElementById("file").type = 'hidden';
									    document.getElementById("undo").type = 'hidden';
									}
									</script> 
		                            <input type="text" name="test" value="{{$page_id->image}}" id="test" class="form-control" disabled>
									<input type="button" name="change" value="Change" onclick="myFunction()" class="btn btn-info">
									<input type="hidden" name="undo" value="Don't Change" onclick="myFunction2()" class="btn btn-danger" id="undo">
		                            <input type="hidden" name="" class="form-control" aria-describedby="fileHelp" id="file">		
		                                                      
		                            <small id="fileHelp" class="form-text text-muted">Please upload a valid file. Size of file should not be more than 2MB.</small>
		                        </div>	    

								<div class="form-group">
									{{ Form::label('content', 'Content : ') }}
									{{ Form::textarea('content',$page_id->content, ['class'=>'form-control', 'placeholder'=>'Enter Page Content', 'id' => 'summary-ckeditor']) }}
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
		                            <script>
									function myFunction3() {
									    document.getElementById("file2").name = 'image2';
									    document.getElementById("file2").type = 'file';
									    document.getElementById("undo2").type = 'button';
									}
									function myFunction4() {
									    document.getElementById("file2").name = '';
									    document.getElementById("file2").type = 'hidden';
									    document.getElementById("undo2").type = 'hidden';
									}
									</script> 
		                            <input type="text" name="test2" value="{{$page_id->image2}}" id="test2" class="form-control" disabled>
									<input type="button" name="change2" value="Change" onclick="myFunction3()" class="btn btn-info">
									<input type="hidden" name="undo2" value="Don't Change" onclick="myFunction4()" class="btn btn-danger" id="undo2">
		                            <input type="hidden" name="" class="form-control" aria-describedby="fileHelp" id="file2">		
		                                                      
		                            <small id="fileHelp" class="form-text text-muted">Please upload a valid file. Size of file should not be more than 2MB.</small>
		                        </div>

								<div class="form-group">
									{{ Form::label('content2', 'Content : ') }}
									{{ Form::textarea('content2',$page_id->content2, ['class'=>'form-control', 'placeholder'=>'Enter Page Content', 'id' => 'summary-ckeditor2']) }}
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
		                            <script>
									function myFunction5() {
									    document.getElementById("file3").name = 'image3';
									    document.getElementById("file3").type = 'file';
									    document.getElementById("undo3").type = 'button';
									}
									function myFunction6() {
									    document.getElementById("file3").name = '';
									    document.getElementById("file3").type = 'hidden';
									    document.getElementById("undo3").type = 'hidden';
									}
									</script> 
		                            <input type="text" name="test3" value="{{$page_id->image3}}" id="test3" class="form-control" disabled>
									<input type="button" name="change3" value="Change" onclick="myFunction5()" class="btn btn-info">
									<input type="hidden" name="undo3" value="Don't Change" onclick="myFunction6()" class="btn btn-danger" id="undo3">
		                            <input type="hidden" name="" class="form-control" aria-describedby="fileHelp" id="file3">		
		                                                      
		                            <small id="fileHelp" class="form-text text-muted">Please upload a valid file. Size of file should not be more than 2MB.</small>
		                        </div>

								<div class="form-group">
									{{ Form::label('content3', 'Content : ') }}
									{{ Form::textarea('content3',$page_id->content3, ['class'=>'form-control', 'placeholder'=>'Enter Page Content', 'id' => 'summary-ckeditor3']) }}
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
		                            <script>
									function myFunction7() {
									    document.getElementById("file4").name = 'image4';
									    document.getElementById("file4").type = 'file';
									    document.getElementById("undo4").type = 'button';
									}
									function myFunction8() {
									    document.getElementById("file4").name = '';
									    document.getElementById("file4").type = 'hidden';
									    document.getElementById("undo4").type = 'hidden';
									}
									</script> 
		                            <input type="text" name="test4" value="{{$page_id->image4}}" id="test4" class="form-control" disabled>
									<input type="button" name="change4" value="Change" onclick="myFunction7()" class="btn btn-info">
									<input type="hidden" name="undo4" value="Don't Change" onclick="myFunction8()" class="btn btn-danger" id="undo4">
		                            <input type="hidden" name="" class="form-control" aria-describedby="fileHelp" id="file4">		
		                                                      
		                            <small id="fileHelp" class="form-text text-muted">Please upload a valid file. Size of file should not be more than 2MB.</small>
		                        </div>

								<div class="form-group">
									{{ Form::label('content4', 'Content : ') }}
									{{ Form::textarea('content4',$page_id->content4, ['class'=>'form-control', 'placeholder'=>'Enter Page Content', 'id' => 'summary-ckeditor4']) }}
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
								{{ Form::select('publication_status',[1=>'Published', 0=>'Unpublished'],$page_id->publication_status, ['class'=>'form-control']) }}
							</div>

							<div class="form-group">
								{{ Form::submit('Update Page', ['class' => 'btn btn-primary']) }}
							</div>

							{!! Form::close() !!}
							{{-- Form Content starts here --}}

						</div>
					</div>
				</div>
				{{-- Form Section Ends Here --}}

			</div>
		</div>
	</section>

@endsection
