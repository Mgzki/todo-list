@props(['list', 'items', 'edit'])
<div class="max-w-sm mx-auto sm:px-6 lg:px-8 pt-5">
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
                            <input class="ml-2 mr-1 mb-1 mt-1 inline-block" data-id="{{ $item->completed }}"
                                type="checkbox" class="">
                            <span class="text-sm inline-block">
                                {{ $item->content }}
                            </span>
                        </label>
                    </form>
                    @if ($edit)
                        <form method='POST' action="/dashboard/{{ $item->list_id }}/edit">
                            @csrf
                            @method('DELETE')

                            <button class=" bg-red-500 tracking-wide text-white px-8 py-2 flex shadow-lg align-middle
                            rounded hover:shadow">Delete</button>
                        </form>
                        <a href="/dashboard/{{ $item->list->slug }}/edit">dsds</a>
                    @endif

                </div>
            @endif
        @endforeach
    </div>
</div>
