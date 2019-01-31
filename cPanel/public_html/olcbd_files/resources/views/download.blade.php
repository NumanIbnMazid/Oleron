@extends('layouts.app')

{{-- Page Title Starts Here --}}
@section('title')
    Downloads
@endsection
{{-- Page Title Ends Here --}}

@section('content')

	<div id="featured-card-section">
        <div class="container-full">
            <div class="w-row">
                <div class="pricing-column box-shadow w-col w-col-4 w-col-medium-12">
                    <div class="correct center featured-card">
                        {{-- Main Content Starts Here --}}     

                        @if(count($downloads) > 0)
                        <div class="blog-meta">
                            You can download the given files as PDF:
                        </div>
                            @foreach ($downloads as $download)
                                @if($download -> publication_status == 1)
                                    <li>
                                        <a href="{{ url("/single-download-view/{$download->id}") }}" style="font-family:Calibri; font-size: 19px; color:#6B6B6B;">
                                            {{ $download->title }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        @else
                        <strong>Empty</strong>
                        @endif
                        
                        {{-- Main Content Ends Here --}}  
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
