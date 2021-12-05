<x-guest-layout>
    <div>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        <div id="topimg">
            <img src="/img/聞香筆記.jpg" class="img-fluid rounded" style="width: 960px;">
        </div>
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div id="myText">
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <div>
                    <span>Email</span>
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
    
                <div class="mt-4">
                    
                    <span>密&nbsp;碼</span>
                    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
    
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('記住我') }}</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    <button class="btn btn-success btn-block">
                        {{ __('登入') }}
                    </button>
                    <br>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('[忘記密碼]') }}
                        </a>
                    @endif
                    <span>|</span>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="">[註冊會員]</a>
                    @endif
                    <br>

                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
