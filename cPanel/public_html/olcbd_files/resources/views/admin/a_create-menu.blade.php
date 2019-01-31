@extends('admin.a_layouts.a_app')

@section('a-title')
  Add New Menu
@endsection

@section('a-content')

  <section class="forms">
    <div class="container-fluid">
      <div class="row">

        {{-- Form Section Starts Here --}}
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>Add New Menu</h4>
            </div>
            <div class="card-body">
              <p>You must fill up all the fields that are marked with * sign.</p>

              {{-- Form Content starts here --}}
              {!! Form::open( ['route' => 'create-menu.store','enctype'=>'multipart/form-data'] ) !!}
              {!! csrf_field() !!}

              <div class="form-group">
                {{ Form::label('title', 'Menu Title : *') }}
                {{ Form::text('title',null, ['class'=>'form-control', 'placeholder'=>'Enter Menu Title']) }}
              </div>

              <div class="form-group">
                {{ Form::label('description', 'Short Description : *') }}
                {{ Form::text('description',null, ['class'=>'form-control', 'placeholder'=>'Enter Menu Short Description']) }}
              </div>

              <div class="form-group">
                {{ Form::label('content', 'Menu Content : *') }}
                {{ Form::textarea('content',null, ['class'=>'form-control', 'placeholder'=>'Enter Menu Content', 'id' => 'summary-ckeditor']) }}
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
                {{ Form::submit('Create Menu', ['class' => 'btn btn-primary']) }}
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
              <h4>All Menus</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <table id="example" class="display" style="width:100%">
                  <thead>
                    <tr>
                      <th>#SL No</th>
                      <th>Menu Title</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tfoot>
                    <tr>
                      <th>#SL No</th>
                      <th>Menu Title</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>

                  <tbody>

                    @if(count($menus) > 0)
                      @foreach($menus as $menu)

                        <tr>
                          <td></td>
                          <td>{{ $menu -> menu_title }}</td>
                          <td>
                            @if($menu -> publication_status == 1)
                              <span class="badge badge-success">Published</span>
                            @else
                              <span class="badge badge-warning">Unpublished</span>
                            @endif
                          </td>
                          <td>
                            <!-- Button to Open the Modal -->
                            <div style="display: flex;">
                              <a class="btn btn-info" href="/create-menu/{{$menu->id}}/edit" style="margin-right:5px;">
                                Modify
                              </a>

                              {!! Form::open(['route'=>['create-menu.destroy', $menu->id],'method'=>'DELETE']) !!}
                              {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'style'=>'margin-right:5px;']) !!}
                              {!! Form::close() !!}

                              <a href="{{ url("/nav-menu-item/{$menu->id}") }}" class="btn btn-success" target="_blank">View</a>
                            </div>
                          </td>
                        </tr>

                      @endforeach

                    </tbody>

                  @else
                    <div class="alert alert-info">
                      <p>Oops, There has no Menus !!!</p>
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
