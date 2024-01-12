<nav>
    <!-- Primary Navigation Menu -->
    <div>
        <div>
            <div>
                <!-- Logo -->
                <div>

                </div>

                <!-- Navigation Links -->
                <div>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                <div>
                    <x-nav-link :href="route('packinglist.list')" :active="request()->routeIs('packinglist.list')">
                        {{ __('packinglists.links.list') }}
                    </x-nav-link>
                </div>
                <div>
                    <x-nav-link :href="route('packinglist.new')" :active="request()->routeIs('packinglist.new')">
                        {{ __('packinglists.links.new') }}
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
