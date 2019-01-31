
@extends('admin.a_layouts.a_app')

@section('a-title')
  Modify Download Page
@endsection

@section('a-content')

  <section class="forms">
    <div class="container-fluid">
      <div class="row">

        {{-- Form Section Starts Here --}}
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>Modify Download Page</h4>
            </div>
            <div class="card-body">
              <p>You must fill up all the fields that are marked with * sign.</p>

              {{-- Form Content starts here --}}
              {!! Form::model( $page_id,['route' => ['create-download.update', $page_id->id], 'method'=>'PUT'] ) !!}
              {!! csrf_field() !!}

              <div class="form-group">
                {{ Form::label('title', 'Download Page Title : *') }}
                {{ Form::text('title',$page_id->title, ['class'=>'form-control', 'placeholder'=>'Enter Download Page Title']) }}
              </div>

              <div class="form-group">
                {{ Form::label('content', 'Download Page Content : *') }}
                {{ Form::textarea('content',$page_id->content, ['class'=>'form-control', 'placeholder'=>'Enter Download Page Content', 'id' => 'summary-ckeditor']) }}
              </div>

              {{-- CKEDITOR Scripts Starts Here --}}
              <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
              <script>
              CKEDITOR.replace( 'summary-ckeditor' );
              </script>
              {{-- CKEDITOR Scripts Ends Here --}}

              <div class="form-group">
                {{ Form::label('status', 'Status : *') }}
                {{ Form::select('status',[1=>'Published', 0=>'Unpublished'],$page_id->publication_status, ['class'=>'form-control']) }}
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
