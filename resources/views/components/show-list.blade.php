@props(['list','items'])
<div class="max-w-md mx-auto sm:px-6 lg:px-8 pt-5">
    <div class="overflow-hidden sm:rounded-lg border-b border-white shadow divide-y">
        <a href="/dashboard/{{ $list->slug }}/edit">
            <p class="font-semibold text-center py-4 bg-white">{{ $list->name }}</p>
        </a>
        @foreach ($items as $item)
            @if ($item->list->id == $list->id)
                <div class="bg-white hover:bg-gray-300 px-4 py-3">
                    <form action="PUT">
                        @csrf
                        <label class="">
                            <input class="ml-2 mr-1 mb-1 mt-1 inline-block" data-id="{{ $item->completed }}" type="checkbox" class="">
                            <span class="text-sm inline-block">
                                {{ $item->content }}
                            </span>
                        </label>
                    </form>
                </div>
            @endif
        @endforeach
    </div>
</div>