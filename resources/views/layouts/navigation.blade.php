<nav>
    <!-- Primary Navigation Menu -->
    <div>
        <div>
            <div>
                <!-- Logo -->
                <div>
                    <a href="{{ route('dashboard') }}">
                        Logo
                    </a>
                </div>

                <!-- Navigation Links -->
                <div>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('admin.title') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-nav-link>
                </form>
            </div>

        </div>
    </div>
</nav>
