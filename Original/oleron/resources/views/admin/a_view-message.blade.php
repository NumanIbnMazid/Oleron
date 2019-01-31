@extends('admin.a_layouts.a_app')

@section('a-title')
  Message View
@endsection

@section('a-content')

  <section class="forms">
    <div class="container-fluid">
      <div class="row">

        <div id="featured-card-section">
          <div class="container-full">
            <div class="w-row">
              <div class="pricing-column box-shadow w-col w-col-4 w-col-medium-12">
                <div class="correct center featured-card">
                {{-- Main Content Starts Here --}}

                <span style="color: rgb(187, 243, 249);line-height: 25px !important;"> {{ $mail->message }} </span>

                {{-- Main Content Ends Here --}}
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
