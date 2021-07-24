<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-10 pb-9">
        <div class="bg-white overflow-hidden sm:rounded-lg border-b border-gray-200 flex-inline shadow flex-wrap">
            <div class="pt-6 pb-7 pr-8 float-right">
                {{-- <div class="">
                    <h1 class="font-bold text-xl py-2 text-red-500"><a href="/dashboard/create">Delete List</a> </h1>
                </div> --}}
                <form method='POST' action="/dashboard/{{ $list->slug }}">
                    @csrf
                    @method('DELETE')
                    
                    <button class=" bg-red-500 tracking-wide text-white px-8 py-2 flex shadow-lg align-middle
                        rounded hover:shadow">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <x-show-list :list="$list" :items="$items"/>
</x-app-layout>