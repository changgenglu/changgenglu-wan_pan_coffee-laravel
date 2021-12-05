<x-guest-layout>
    <div>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>
        <div id="topimg">
            <img src="/img/聞香筆記.jpg" class="img-fluid rounded" style="width: 960px;">
        </div>

        <div id="myText">

            <div class="mb-4 text-sm text-gray-600">
                {{ __('我們會將修改密碼的連結，寄至您的信箱。') }}
            </div>
    
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
    
            <x-jet-validation-errors class="mb-4" />
    
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
    
                <div class="block">
                    <span>Email</span>
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    <button class="btn btn-success btn-block">
                        {{ __('確認送出') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
