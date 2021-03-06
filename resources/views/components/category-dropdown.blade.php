@props(['categories'])
<x-dropdown align="left" width="48">
    <x-slot name="trigger">
        <div
            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out cursor-pointer">
            <div>
                {{ request('category') ? ucwords(request('category')) : 'Category' }}
            </div>

            <div class="">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </div>


    </x-slot>

    <x-slot name="content">
        
        @foreach ($categories as $category)
                <x-dropdown-item :active="isset($currentCategory) && $currentCategory->is($category)" class="cursor-pointer">
                    {{ ucwords($category->name) }}
                    <!-- <input type="" name="category" value="{{ $category->id }} "> -->
                </x-dropdown-item>
        @endforeach

    </x-slot>
    
</x-dropdown>

