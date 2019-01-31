{{-- @if(Request::is('/')) --}}
	@extends('layouts.app')
	{{-- Page Title Starts Here --}}
	@section('title')
		Blank Page
	@endsection
	{{-- Page Title Ends Here --}}
	@section('content')

		<div id="featured-card-section">
            <div class="container-full">
                <div class="w-row">
                    <div class="pricing-column box-shadow w-col w-col-4 w-col-medium-12">
                        <div class="correct center featured-card">
							{{-- Main Content Starts Here --}}

								
							
							{{-- Main Content Ends Here --}}
						</div>
					</div>
				</div>
			</div>
		</div>

	@endsection
{{-- @endif --}}