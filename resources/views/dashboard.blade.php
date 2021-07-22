<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-2 ">
            <div class="bg-white overflow-hidden sm:rounded-lg border-b border-gray-200 flex-inline shadow flex-wrap">
                <div class="py-6 pl-8 mx-auto float-left ">
                    <div class="">
                        <h1 class="font-bold text-xl py-2 "> Your Lists</h1>
                    </div>

                </div>
                <div class="py-6 pr-8 float-right">
                    <div class="">
                        <h1 class="font-bold text-xl py-2"><a href="/dashboard/create">Create New List</a> </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="sm:px-6 lg:px-8 pt-5 ">
            @foreach ($lists as $list)
                <div class="">
                    @if (Auth::user()->id === $list->author->id)
                        <x-show-list :list="$list" :items="$items" />
                    @endif
                </div>
            @endforeach
        </div>

</x-app-layout>
