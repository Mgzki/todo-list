<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="max-w-sm mx-auto sm:px-6 lg:px-8 pt-5 justify-center">
        <div class="overflow-hidden sm:rounded-lg border-b border-white flex-inline shadow divide-y">
            {{-- <p class="py-5 px-8 font-semibold text-lg ">{{ $list->author->name}}</p> --}}
            <p class="font-semibold text-center py-4 bg-white">{{ $list->name }}</p>
            @foreach ($items as $item)
                @if ($item->list->id == $list->id)
                    <div class="bg-white hover:bg-gray-300 px-4 py-3 flex">
                        {{-- <p class= "text-left ">{{ $item->content }}</p>
                        <input type="checkbox" name="completed" id="completed" class="inline-block"> --}}
                        <form action="PUT">
                            @csrf
                            <label class="flex-items-top">
                                <input class="ml-2 mr-1 mb-1 mt-1 inline-block" data-id="" type="checkbox" class="">
                                <span class="text-sm inline-block text-center">
                                    {{ $item->content }}
                                </span>
                            </label>
                        </form>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

</x-app-layout>
