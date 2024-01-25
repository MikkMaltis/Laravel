<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <ul>
                    @foreach ($books as $book)
                        <div class="flex justify-between border-b text-xl">
                            <li class="text-white">{{ $book->title }}</li>
                            <div>
                                <button class="text-white font-bold px-4 rounded">
                                    <a href="{{ route('authors.index', $book->id) }}">Show</a>
                                </button>
                                <button class="text-white font-bold px-4 rounded">
                                    <a href="{{ route('authors.edit', $book->id) }}">Edit</a>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </ul>
                <div class="pagination">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
