<div id="app">
    <nav id="navbar-main" class="navbar is-fixed-top">
        <div class="navbar-brand">
            <a class="navbar-item mobile-aside-button">
                <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
            </a>
        </div>
        <div class="navbar-brand is-right">
            <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
                <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
            </a>
        </div>
        <div class="navbar-menu" id="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item dropdown has-divider has-user-avatar">
                    <a class="navbar-link">
                        <div class="user-avatar">
                            <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe"
                                class="rounded-full">
                        </div>
                        <div class="is-user-name"><span>
                                {{-- <div>{{ Auth::user()->name }}</div> --}}
                                Lokesh
                            </span></div>
                        <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
                    </a>
                    <div class="navbar-dropdown">
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            <span class="icon"><i class="mdi mdi-logout"></i></span>
                            <span>Log Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
