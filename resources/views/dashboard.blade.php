<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Lists') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-5 ">
            <div class="bg-white overflow-hidden sm:rounded-lg border-b border-gray-200 flex-inline relative">
                <div class="py-6 pl-8 mx-auto float-left">
                    <div class="">
                        <h1 class="font-bold text-xl pb-8"> Your Lists</h1>
                        {{-- @if ($lists->count(1))
                            {{ $lists->all() }}
                        @else
                            No Lists
                        @endif --}}
                        
                    </div>

                </div>
                <div class="py-6 pr-8 float-right ">
                    <div class="">
                        <h1 class="font-bold text-xl pb-8"> Create New List</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-5 ">
            <div class="bg-white overflow-hidden sm:rounded-lg border-b border-gray-200 flex-inline relative divide-y">
                @foreach ($lists as $list)
                    <p class="py-5 pl-8 mx-auto">{{ $list->name }}</p>
                @endforeach
                
            </div>
        </div>
    </div>
</x-app-layout>
