{{-- Developed by "Numan Ibn Mazid"
Facebook: https://web.facebook.com/numanibnmazid
Twitter: https://twitter.com/NumanIbnMazid
Linkedin: https://www.linkedin.com/in/numan-ibn-mazid-23883910a/
Youtube: https://www.youtube.com/channel/UCZzwa6o1T4h9pc6U3q5BhKw
Instagram: https://www.instagram.com/numan_ibn_mazid/ --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
{{-- Head Section Starts Here --}}
@include('inc._head')
{{-- Head Section Ends Here --}}
<body>

{{-- Navbar Section Starts Here --}}
@include('inc._navbar')
{{-- Navbar Section Ends Here --}}

{{-- Slider Section Starts Here --}}
@if(Request::is('/'))
    @include('inc._slider')
@endif
{{-- Slider Section Ends Here --}}

{{-- Page Content Section Starts Here --}}
<section id="blog-full-width">
    <div class="container">

        {{-- Page Title Section Starts Here --}}
        @include('inc._page-title')
        {{-- Page Title Section Ends Here --}}

        {{-- Admiralty Section Starts Here --}}
        @if(Request::is('admiralty-cause'))
            @include('inc._admiralty')
        @endif
        {{-- Admiralty Section Ends Here --}}

        <div class="row">

            <div class="col-md-8">
                <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                    <div class="blog-content">

                    
                        {{-- Messages Section Starts Here --}}
                        @include('inc._messages')
                        {{-- Messages Section Ends Here --}}

                        {{-- Main Content Section Starts Here --}}
                        @yield('content')
                        {{-- Main Content Section Ends Here --}}

                    </div>
                </article>
            </div>

            {{-- <div id="side"> --}}
            {{-- Right Sidebar Section Starts Here --}}
            @include('inc._right-sidebar')
            {{-- Right Sidebar Section Ends Here --}}
            {{-- </div> --}}

        </div>
    </div>
</section>
{{-- Page Content Section Ends Here --}}

{{-- Global Counter Section Starts Here --}}
@include('inc.counter.counter_sticky')
{{-- Global Counter Section Ends Here --}}

{{-- Second Counter Section Starts Here --}}
@if(Request::is('/'))
    <div class="container">
        {{-- Counter Section Starts Here --}}
        @include('inc.counter.counter')
        {{-- Counter Section Ends Here --}}
    </div>
@endif
{{-- Second Counter Section Ends Here --}}

{{-- Footer Section Starts Here --}}
@include('inc._footer')
{{-- Footer Section Ends Here --}}

{{-- Scripts Section Starts Here --}}
@include('inc._scripts')
{{-- Scripts Section Ends Here --}}

</body>
</html>