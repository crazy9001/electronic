<nav id="sidebar-nav" class="sidebar-nav">
    <div id="sidebar-wrapper" class="sidebar-wrapper" data-background="default">
        <component>sidebar-nav</component>
        <ul class="side-nav-top nav">
            <li class="sidebar-nav-logo">
                <component>sidebar-nav-logo</component>
                <img src="{{ asset('img/sidebar-logo.png') }}" alt="Dee Admin">
                <span class="logo-text">
                    <b>Dee</b> Template
                </span>
            </li>
            <li class="sidebar-nav-profile">
                <component>sidebar-nav-profile</component>
                <div class="profile-left">
                    <img src="{{ asset('img/user.jpg') }}" alt="{{ isset($userName) ? $userName : '' }}">
                </div>
                <div class="profile-right">
                    <span class="name">
                        {{ isset($userName) ? $userName : '' }}
                    </span>
                    <span class="info">
                        Project Manager
                    </span>
                </div>
            </li>
        </ul>

        @include('bases::partials.menu')

    </div>
</nav>