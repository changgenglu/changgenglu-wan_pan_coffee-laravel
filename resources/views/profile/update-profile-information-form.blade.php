<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>


        <x-slot name="form">

            <!-- Name -->
            <div class="">
                <span>姓名</span>
                <input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
                {{-- <x-jet-input-error for="name" class="mt-2" /> --}}
            </div>
    
            <!-- Email -->
            <div class="">
                <span>Email</span>
                <input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
                {{-- <x-jet-input-error for="email" class="mt-2" /> --}}
            </div>
        </x-slot>


    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
