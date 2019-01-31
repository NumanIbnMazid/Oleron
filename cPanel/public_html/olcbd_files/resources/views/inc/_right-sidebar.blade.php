<!-- Sidebar -->
<div class="col-md-4">
    <div class="sidebar">

        <div class="recent-post widget">

            <ul>
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="/" style="font-family:Georgia, serif !important;">Home</a><br>
                </li>

                <li class="{{ Request::is('admiralty-cause') ? 'active' : '' }}">
                    <a href="/admiralty-cause" style="font-family:Georgia, serif !important;">Admiralty Court Cause List</a><br>
                </li>

                @if(count($sidemenus) > 0)

                @foreach($sidemenus as $sidemenu)

                    @if($sidemenu -> publication_status == 1)


                    <li class="{{ Request::path() == "sidebar-menu-item/{$sidemenu->id}" ? 'active' : '' }}">
                        <a href="{{ url("/sidebar-menu-item/{$sidemenu->id}") }}" style="font-family:Georgia, serif !important;">{{ $sidemenu -> page_title }}</a><br>
                    </li>

                    @endif

                @endforeach

                @endif

                @if(count($image_items) > 0)
                  @foreach ($image_items as $item)
                    @if(($item -> appear_on == 1) && ($item -> publication_status == 1))
                        {{-- @if($item -> publication_status == 1) --}}
                            <li class="{{ Request::path() == "custom-page-view/{$item->id}" ? 'active' : '' }}">
                                <a href="{{ url("/custom-page-view/{$item->id}") }}" style="font-family:Georgia, serif !important;">{{ $item->title }}</a>
                            </li>
                        {{-- @endif --}}
                    @endif
                  @endforeach
                @endif
                
                <li class="{{ Request::is('downloads') ? 'active' : '' }}">
                    <a href="/downloads" style="font-family:Georgia, serif !important;">Download</a><br>
                </li>

            </ul>

        </div>

    </div>
</div>
