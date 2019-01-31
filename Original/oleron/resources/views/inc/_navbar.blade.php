<!--
==================================================
Header Section Start
================================================== -->
<header id="top-bar" class="navbar-fixed-top animated-header"z>
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <div class="navbar-brand">
                <a href="/" >
                    {{-- <img src="/images/logo.png" alt=""> --}}
                    {{-- <p id="logo">Oléron</p> --}}
                    <div class="flux" style="font-family:Georgia, serif !important;">Oléron </div>
                </a>
                <script type="text/javascript">
                    
                </script>
            </div>
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right" id="myActive">
                  {{-- <li class="{{ Request::is('/') ? 'active' : '' }}">
                      <a href="/">Home</a>
                  </li> --}}
                  <li class="{{ Request::is('services') ? 'active' : '' }}">
                      <a href="/services">Services</a>
                  </li>
                    @if(count($navmenu) > 0)
                      @foreach ($navmenu as $menu)
                        @if($menu -> publication_status == 1)
                          {{-- <li class="{{ request()->segment(2) == $menu->id ? 'active' : '' }}"> --}}
                          {{--<li class="{{ Request::path() == "create-menu/{$menu->id}" ? 'active' : '' }}">--}}
                              {{--<a href="{{ url("create-menu/{$menu->id}") }}" >{{ $menu->menu_title }}</a>--}}
                          {{--</li>--}}

                            <li class="{{ Request::path() == "nav-menu-item/{$menu->id}" ? 'active' : '' }}">
                                <a href="{{ url("/nav-menu-item/{$menu->id}") }}" >{{ $menu->menu_title }}</a>
                            </li>
                        @endif
                      @endforeach
                    @endif

                    @if(count($image_items) > 0)
                      @foreach ($image_items as $item)
                        @if(($item -> appear_on == 0) && ($item -> publication_status == 1))
                            {{-- @if($item -> publication_status == 1) --}}
                                <li class="{{ Request::path() == "custom-page-view/{$item->id}" ? 'active' : '' }}">
                                    <a href="{{ url("/custom-page-view/{$item->id}") }}" >{{ $item->title }}</a>
                                </li>
                            {{-- @endif --}}
                        @endif
                      @endforeach
                    @endif

                    <li class="{{ Request::is('contact') ? 'active' : '' }}">
                        <a href="/contact" id="contactt">Contact Us</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
