@auth

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color:#0b3d2e;">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand fw-bold me-4" href="{{route('home')}}">
            {{config('app.name','Discover Pakistan')}}
        </a>

        <!-- MOBILE TOGGLER -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#adminNavbar"
                aria-controls="adminNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- NAVIGATION -->
        <div class="collapse navbar-collapse" id="adminNavbar">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <!-- BANNERS -->
                <li class="nav-item">
                    <a class="nav-link px-3 {{request()->routeIs('banner.*') ? 'active fw-semibold' : ''}}"
                       href="{{route('banner.list')}}">
                        Banners
                    </a>
                </li>

                <!-- WHY SECTION -->
                <li class="nav-item">
                    <a class="nav-link px-3 {{request()->routeIs('whysection.*') ? 'active fw-semibold' : ''}}"
                       href="{{route('whysection.index')}}">
                        Why Section
                    </a>
                </li>

                <!-- destinations -->
                <li class="nav-item">
                    <a class="nav-link px-3 {{request()->routeIs('destinations.*') ? 'active fw-semibold' : ''}}"
                       href="{{route('destinations.list')}}">
                        Destinations
                    </a>
                </li>

                <!-- EXPLORE MORE -->
                <li class="nav-item">
                    <a class="nav-link px-3 {{request()->routeIs('explore.*') ? 'active fw-semibold' : ''}}"
                       href="{{route('explore.list')}}">
                        Explore More
                    </a>
                </li>

                <!-- FOOTER -->
                <li class="nav-item">
                    <a class="nav-link px-3 {{request()->routeIs('footer.*') ? 'active fw-semibold' : ''}}"
                       href="{{route('footer.list')}}">
                        Footer
                    </a>
                </li>

            </ul>

            <!-- USER -->
            <ul class="navbar-nav">

                <li class="nav-item dropdown">

                    <a id="navbarDropdown"
                       class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        {{Auth::user()->name}}

                    </a>

                    <ul class="dropdown-menu dropdown-menu-end shadow-sm"
                        aria-labelledby="navbarDropdown">

                        <li>
                            <a class="dropdown-item"
                               href="{{route('logout')}}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                Logout

                            </a>
                        </li>

                    </ul>

                    <form id="logout-form"
                          action="{{route('logout')}}"
                          method="POST"
                          class="d-none">
                        @csrf
                    </form>

                </li>

            </ul>

        </div>

    </div>
</nav>

@endauth