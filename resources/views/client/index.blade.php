<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <ul>
                    @foreach ($clients as $client)
                        <div class="flex justify-between border-b text-xl">
                            <li class="">{{ $client->first_name }} {{ $client->last_name }}</li>
                            <div>
                                <button class=" font-bold px-4 rounded">
                                    <a href="{{ route('clients.index', $client->id) }}">Show</a>
                                </button>
                                <button class=" font-bold px-4 rounded">
                                    <a href="{{ route('clients.edit', $client->id) }}">Edit</a>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </ul>
                <div class="pagination">
                    {{ $clients->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
