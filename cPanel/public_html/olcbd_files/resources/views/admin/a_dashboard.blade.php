@extends('admin.a_layouts.a_app')

@section('a-content')

<div class="card-header">
	<h4>Admin Dashboard</h4>
</div>
	<!-- Counts Section -->
	<section class="dashboard-counts section-padding" id="dash">	
	    <div class="container-fluid">
	      <div class="row">

			@if($counts>0)

		      	<div class="container">
	              <div class="wrapper count-title d-flex">
	                <div class="icon"><i class="icon-padnote"></i></div>
	                <div class="count-number" style="color: #d16a76; font-style: bold; font-weight: 700;">{{ $counts }}</div>
	                <div class="name"><strong class="text-uppercase"><span><h1 style="color: #ad8287">Unread Mails</h1></span></strong>
	                	<span class="alert alert-success"><a href="/all-mails" class="btn btn-primary">View Mails</a></span>
	                  
	                </div>
	              </div>
	            </div>

            @else

				<div class="container">
	              <div class="wrapper count-title d-flex">
	                <div class="icon"><i class="icon-padnote"></i></div>
	                <div class="name"><strong class="text-uppercase"><span><h1>Incoming Mails</h1></span></strong>
	                	<span class="alert alert-success"><h2 style="color: #445b77">You have no incoming mails yet !!!</h2></span>
	                  <div class=""><span class="alert alert-info"><h4 style="color: #457752"y>Please keep checking on a regular basis</h4></span></div>
	                </div>
	              </div>
	            </div>

            @endif

	      </div>
	    </div>


	</section>

@endsection