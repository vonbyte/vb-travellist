<x-guest-layout>
    <x-slot name="header">
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}">{{ __('core.title') }}</a>
                @else
                    <a href="{{ route('login') }}">{{ __('Log in') }}</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @endauth
            </div>
        @endif
        <h2>
            {{ __('core.title') }}
        </h2>
    </x-slot>
    <div>
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>

</x-guest-layout>
