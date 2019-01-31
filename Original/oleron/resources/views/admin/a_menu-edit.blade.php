@extends('admin.a_layouts.a_app')

@section('a-title')
  Modify Menu
@endsection

@section('a-content')

  <section class="forms">
    <div class="container-fluid">
      <div class="row">

        {{-- Form Section Starts Here --}}
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>Modify Menu</h4>
            </div>
            <div class="card-body">
              <p>You must fill up all the fields that are marked with * sign.</p>

              {{-- Form Content starts here --}}
              {!! Form::model($menus,['route'=>['create-menu.update',$menus->id],'method'=>'PUT']) !!}
              {!! csrf_field() !!}

              <div class="form-group">
                {{ Form::label('title', 'Menu Title : *') }}
                {{ Form::text('title',$menus->menu_title, ['class'=>'form-control', 'placeholder'=>'Enter Menu Title']) }}
              </div>

              <div class="form-group">
                {{ Form::label('description', 'Short Description : *') }}
                {{ Form::text('description',$menus->short_description, ['class'=>'form-control', 'placeholder'=>'Enter Menu Short Description']) }}
              </div>

              <div class="form-group">
                {{ Form::label('content', 'Menu Content : *') }}
                {{ Form::textarea('content',$menus->menu_content, ['class'=>'form-control', 'placeholder'=>'Enter Menu Content', 'id' => 'summary-ckeditor']) }}
              </div>

              {{-- CKEDITOR Scripts Starts Here --}}
              <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
              <script>
                CKEDITOR.replace( 'summary-ckeditor' );
              </script>
              {{-- CKEDITOR Scripts Ends Here --}}

              <div class="form-group">
                {{ Form::label('publication_status', 'Status : *') }}
                {{ Form::select('publication_status',[1=>'Published', 0=>'Unpublished'],$menus->publication_status, ['class'=>'form-control']) }}
              </div>

              <div class="form-group">
                {{ Form::submit('Update Menu', ['class' => 'btn btn-primary']) }}
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
