<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  dark:text-gray-200 leading-tight">
            {{ __('Authors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <ul>
                    @foreach ($authors as $author)
                        <div class="flex justify-between border-b text-xl">
                            <li class="">{{ $author->first_name }} {{ $author->last_name }}</li>
                            <div>
                                <button class=" font-bold px-4 rounded">
                                    <a href="{{ route('authors.edit', $author->id) }}">Edit</a>
                                </button>
                                <button class=" font-bold px-4 rounded">
                                    <a href="">Delete</a>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </ul>
                <div class="pagination">
                    {{ $authors->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
