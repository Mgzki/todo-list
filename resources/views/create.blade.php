<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>

        <form method="POST" action="/dashboard" class="">
            @csrf

            <!-- List Name -->
            <div>
                <x-label for="name" :value="__('List Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Category -->
            {{-- <div class="mt-4">
                <x-label for="category" :value="__('Category')" />

                <x-input id="category" class="block mt-1 w-full"
                                type="text"
                                name="category"/>
            </div> --}}
            <div class="mt-6">
                <x-category-dropdown :categories="$categories"/>
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-3">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>