@extends('layouts.app')

{{-- Page Title Starts Here --}}
@section('title')
    {{ $page_items -> title }}
@endsection
{{-- Page Title Ends Here --}}

@section('content')

	<div id="featured-card-section">
        <div class="container-full">
            <div class="w-row">
                <div class="pricing-column box-shadow w-col w-col-4 w-col-medium-12">
                    <center><h3 class="blogpost-title" id="myTitle">
                        {{ $page_items -> title }}
                    </h3></center>
                    <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s" id="team-our">
                        {{-- Main Content Starts Here --}}   
                        <div class="row" style="padding-top:20px;">   

                            @if($page_items->image != NULL )
                            <div class="col-sm-6">
                                <img src="{{ asset('storage/'.$page_items -> image) }}" alt="NumanIbnMazid" class="img-thumbnail" style="height: 400px;width: 350px;">    
                            </div>                 
                            @endif
                            @if($page_items->content != NULL )
                            <div class="col-sm-6">
                                <div class="blog-meta" style="overflow: scroll">
                                    <p>
                                        {!! $page_items -> content !!}
                                    </p>  
                                </div>
                            </div>  
                            @endif

                        </div>

                        {{-- Main Content Ends Here --}}
                    </div>

                    <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s" id="team-our">
                        {{-- Main Content Starts Here --}}   
                        
                        <div class="row" style="padding-top:20px;">   

                            @if($page_items->image2 != NULL )
                            <div class="col-sm-6">
                                <img src="{{ asset('storage/'.$page_items -> image2) }}" alt="NumanIbnMazid" class="img-thumbnail" style="height: 400px;width: 350px;">    
                            </div>                 
                            @endif
                            @if($page_items->content2 != NULL )
                            <div class="col-sm-6">
                                <div class="blog-meta" style="overflow: scroll">
                                    <p>
                                        {!! $page_items -> content2 !!}
                                    </p>  
                                </div>
                            </div>  
                            @endif 

                        </div>
                        
                        {{-- Main Content Ends Here --}}
                    </div>

                    <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s" id="team-our">
                        {{-- Main Content Starts Here --}}   
                        
                        <div class="row" style="padding-top:20px;">   

                            @if($page_items->image3 != NULL )
                            <div class="col-sm-6">
                                <img src="{{ asset('storage/'.$page_items -> image3) }}" alt="NumanIbnMazid" class="img-thumbnail" style="height: 400px;width: 350px;">    
                            </div>                 
                            @endif
                            @if($page_items->content3 != NULL )
                            <div class="col-sm-6">
                                <div class="blog-meta" style="overflow: scroll">
                                    <p>
                                        {!! $page_items -> content3 !!}
                                    </p>  
                                </div>
                            </div>  
                            @endif 

                        </div>

                        {{-- Main Content Ends Here --}}
                    </div>

                    <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s" id="team-our">
                        {{-- Main Content Starts Here --}}   
                        
                        <div class="row" style="padding-top:20px;">   

                            @if($page_items->image4 != NULL )
                            <div class="col-sm-6">
                                <img src="{{ asset('storage/'.$page_items -> image4) }}" alt="NumanIbnMazid" class="img-thumbnail" style="height: 400px;width: 350px;">    
                            </div>                 
                            @endif
                            @if($page_items->content4 != NULL )
                            <div class="col-sm-6">
                                <div class="blog-meta" style="overflow: scroll">
                                    <p>
                                        {!! $page_items -> content4 !!}
                                    </p>  
                                </div>
                            </div>  
                            @endif  

                        </div>

                        {{-- Main Content Ends Here --}}
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
