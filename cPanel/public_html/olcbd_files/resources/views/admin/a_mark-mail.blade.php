@extends('admin.a_layouts.a_app')

@section('a-title')
  Mark Mail Status
@endsection

@section('a-content')

  <section class="forms">
    <div class="container-fluid">
      <div class="row">

        {{-- Form Section Starts Here --}}
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>Mark Mail</h4>
            </div>
            <div class="card-body">
              <p>Mark mail message as Done or Undone</p>

              {{-- Form Content starts here --}}
              {!! Form::model($mail,['url'=>['mark-mail/submit',$mail->id],'method'=>'post']) !!}
              {!! csrf_field() !!}

              <div class="form-group">
                {{ Form::label('status', 'Status : *') }}
                {{ Form::select('status',[1=>'Done', 0=>'Undone'],$mail->status, ['class'=>'form-control']) }}
              </div>

              <div class="form-group">
                {{ Form::submit('Update Status', ['class' => 'btn btn-primary']) }}
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
