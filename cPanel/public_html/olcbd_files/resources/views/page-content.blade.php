@extends('layouts.app')

{{-- Page Title Starts Here --}}
@section('title')
    {{ $page -> page_title }}
@endsection
{{-- Page Title Ends Here --}}

@section('content')

	<div id="featured-card-section">
        <div class="container-full">
            <div class="w-row">
                <div class="pricing-column box-shadow w-col w-col-4 w-col-medium-12">
                    <div class="correct center featured-card">
                        {{-- Main Content Starts Here --}}   

                        <div class="blog-meta">
                            {{ $page -> short_description }}
                        </div>
                        <p>
                            {!! $page -> page_content !!}
                        </p>
                        
                        {{-- Main Content Ends Here --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
