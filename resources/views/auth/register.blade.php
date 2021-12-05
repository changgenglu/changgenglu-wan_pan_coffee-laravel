<x-guest-layout>
    <div>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>
        <div id="topimg">
            <img src="/img/烘豆.jpg" class="img-fluid rounded" style="width: 960px;">
        </div>

        <x-jet-validation-errors class="mb-4" />
        <div id="myText">

            <form method="POST" action="{{ route('register') }}">
                @csrf
    
                <div>
                    <span>姓&nbsp;&nbsp;&nbsp;&nbsp;名</span>
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
    
                <div class="mt-4">
                    <span>&nbsp;Email&nbsp;&nbsp;</span>
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
    
                <div class="mt-4">
                    <span>密&nbsp;&nbsp;&nbsp;&nbsp;碼</span>
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
    
                <div class="mt-4">
                    <span>確認密碼</span>
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
                <br>
                <div>
                    <input type="checkbox" required>我同意<a href="{{ url('/provision') }}" style="text-decoration: underline;">網站服務條款及隱私政策</a>
                    <br>
                    <input type="checkbox" required>我願意接收店家騷擾的電子郵件
                    
                </div>
    
    
                <div class="flex items-center justify-end mt-4">
                   
                    <button class="btn btn-success btn-block">
                        {{ __('註冊') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
