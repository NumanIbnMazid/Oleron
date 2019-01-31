@if(Request::is('services'))

	@extends('layouts.app')

	{{-- Page Title Starts Here --}}
	@section('title')
		Services
	@endsection
	{{-- Page Title Ends Here --}}

	@section('content')

	<p id="myTitle">We Provide</p>
	<h4>Services</h4>
		<div class="row">
		<div class="col-sm-6" id="service">
			<div class="col-sm">

				<div class="col-md">
		            <div class="panel panel-primary">
		                <div class="panel-heading">
		                    {{-- <h3 class="panel-title">
		                        Panel with list and no body</h3> --}}
		                </div>
		                <ul class="list-group">
		                    <a href="/contact" class="list-group-item">Legal Opinion</a>
		                    <a href="/contact" class="list-group-item">Legal Documentation</a>
		                    <a href="/contact" class="list-group-item">Legal Research</a>
		                    <a href="/contact" class="list-group-item">Court service/Advocate</a>
		                </ul>
		            </div>
		            <a class="btn btn-primary" id="link-home-solutions-int" href="/contact">Get Service</a>
		        </div>

			</div>
		</div>
		<div class="col-sm-6">
			<div class="col-sm">

				<div class="col-md">
		            <div class="panel panel-primary">
		                <div class="panel-heading">
		                    <a class="btn btn-primary" onclick="sortList()">
		                        Sort out Alphabetically</a>

	                    </div>
						<center><h5>List of Services</h5></center>
						<ul class="sidebarservices" id="id01">

							
							@foreach($services as $service)
								<li><a href="/contact">{{ $service }}</a></li>
							@endforeach

							<script>
								function sortList() {
								  var list, i, switching, b, shouldSwitch;
								  list = document.getElementById("id01");
								  switching = true;
								  /*Make a loop that will continue until
								  no switching has been done:*/
								  while (switching) {
								    //start by saying: no switching is done:
								    switching = false;
								    b = list.getElementsByTagName("LI");
								    //Loop through all list-items:
								    for (i = 0; i < (b.length - 1); i++) {
								      //start by saying there should be no switching:
								      shouldSwitch = false;
								      /*check if the next item should
								      switch place with the current item:*/
								      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
								        /*if next item is alphabetically
								        lower than current item, mark as a switch
								        and break the loop:*/
								        shouldSwitch = true;
								        break;
								      }
								    }
								    if (shouldSwitch) {
								      /*If a switch has been marked, make the switch
								      and mark the switch as done:*/
								      b[i].parentNode.insertBefore(b[i + 1], b[i]);
								      switching = true;
								    }
								  }
								}
							</script>
							{{-- <li><a href="/services">Foreign investment</a></li>
							<li><a href="/services">Admiralty, Maritime and Shipping Law</a></li>
							<li><a href="/services">Maritime arbitration or dispute resolution</a></li>
							<li><a href="/services">Dry Shipping</a></li>
							<li><a href="/services">Wet Shipping</a></li>
							<li><a href="/services">Ship building, equipping and rigging</a></li>
							<li><a href="/services">Ship repairs or conversion</a></li>
							<li><a href="/services">Ship finance</a></li>
							<li><a href="/services">Ship mortgage, charge and subrogation</a></li>
							<li><a href="/services">Ownership and possession of ship</a></li>
							<li><a href="/services">Ship buy or sale</a></li>
							<li><a href="/services">MOA disputes</a></li>
							<li><a href="/services">Afreightment</a></li>
							<li><a href="/services">Charter party and hire</a></li>
							<li><a href="/services">Bill of Lading</a></li>
							<li><a href="/services">Maritime Claims</a></li>
							<li><a href="/services">Maritime Lines</a></li>
							<li><a href="/services">Crew claims and wages</a></li>
							<li><a href="/services">Personal Injury and loss of life</a></li>
							<li><a href="/services">Ports, harbours and terminals operation</a></li>
							<li><a href="/services">Maritime disaster</a></li>
							<li><a href="/services">Casualties</a></li>
							<li><a href="/services">Collision and grounding</a></li>
							<li><a href="/services">Striking liabilities</a></li>
							<li><a href="/services">Limitation of Liability</a></li>
							<li><a href="/services">Salvage and wreck removal</a></li>
							<li><a href="/services">Pilotage</a></li>
							<li><a href="/services">Towage</a></li>
							<li><a href="/services">General average</a></li>
							<li><a href="/services">Cargo recovery and defence</a></li>
							<li><a href="/services">Cruise and Passenger ship</a></li>
							<li><a href="/services">Arrest of Ship</a></li>
							<li><a href="/services">Prevention of wrongful arrest</a></li>
							<li><a href="/services">Release of Ship</a></li>
							<li><a href="/services">Judicial Sale</a></li>
							<li><a href="/services">Defence against wrongful sale</a></li>
							<li><a href="/services">Marine Insurance and reinsurance</a></li>
							<li><a href="/services">Freight Forwarding</a></li>
							<li><a href="/services">Ship Agency</a></li>
							<li><a href="/services">H & M Insurance</a></li>
							<li><a href="/services">P & I settlements</a></li>
							<li><a href="/services">Bunkers claims</a></li>
							<li><a href="/services">Supplies and necessaries</a></li>
							<li><a href="/services">Disbursement made on account of a ship</a></li>
							<li><a href="/services">Risk Management</a></li>
							<li><a href="/services">Offshore</a></li>
							<li><a href="/services">Sea leg transport</a></li>
							<li><a href="/services">Prevention of maritime fraud</a></li>
							<li><a href="/services">Enforcement of awards and judgments</a></li>
							<li><a href="/services">Freight Forwarder’s liability</a></li>
							<li><a href="/services">Multimodal and Unimodal Transportation</a></li>
							<li><a href="/services">Forfeiture or condemnation of ship</a></li>
							<li><a href="/services">Bottomry and Respondentia</a></li>
							<li><a href="/services">Oil and HNS pollution Claims</a></li>
							<li><a href="/services">Piracy and Maritime Security</a></li>
							<li><a href="/services">Aviation and Carriage by Air</a></li>
							<li><a href="/services">Human Rights at Sea</a></li> --}}

						</ul>
						{{ $services->links() }}

					</div>
				</div>

			</div>
		</div>
	</div>

@endsection

@endif
