<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-2 ">
            <div class="bg-white overflow-hidden sm:rounded-lg border-b border-gray-200 flex-inline shadow relative">
                <div class="py-6 pl-8 mx-auto float-left ">
                    <div class="">
                        <h1 class="font-bold text-xl py-2 "> Your Lists</h1>
                    </div>

                </div>
                <div class="py-6 pr-8 float-right">
                    <div class="">
                        <h1 class="font-bold text-xl py-2"> Create New List</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="mx-auto max-w-4xl flex">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 pt-5">
                <div class="bg-white overflow-hidden sm:rounded-lg border-b border-gray-200 shadow max-w-4xl">

                    @foreach ($lists as $list)
                        @if (Auth::user()->id === $list->author->id)
                            <div class="">
                                <a href="/dashboard/{{ $list->slug }}">
                                    <p class="py-5 px-8 font-semibold text-lg hover:bg-blue-100 text-center mx-auto">
                                        {{ ucwords($list->name) }}</p>
                                </a>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 pt-5">
                <div class="bg-white overflow-hidden sm:rounded-lg border-b border-gray-200 shadow max-w-6xl">

                    @foreach ($lists as $list)
                        @if (Auth::user()->id === $list->author->id)
                            <div class="">
                                <a href="/dashboard/{{ $list->slug }}">
                                    <p class="py-5 px-8 font-semibold text-lg hover:bg-blue-100 text-center mx-auto">
                                        {{ ucwords($list->name) }}</p>
                                </a>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 pt-5">
                <div class="bg-white overflow-hidden sm:rounded-lg border-b border-gray-200 shadow max-w-4xl">

                    @foreach ($lists as $list)
                        @if (Auth::user()->id === $list->author->id)
                            <div class="">
                                <a href="/dashboard/{{ $list->slug }}">
                                    <p class="py-5 px-8 font-semibold text-lg hover:bg-blue-100 text-center mx-auto">
                                        {{ ucwords($list->name) }}</p>
                                </a>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>

    </div>
</x-app-layout>
