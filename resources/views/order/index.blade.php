<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  dark:text-gray-200 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <ul>
                    @foreach ($orders as $order)
                        <div class="flex justify-between border-b text-xl">
                            <li class="">{{ $order->client->first_name }} {{ $order->client->last_name }}</li>
                            <li class="">Order
                                nr: {{ $order->id }}</li>
                            <div>
                                <button class=" font-bold px-4 rounded">
                                    <a href="{{ route('orders.index', $order->id) }}">Show</a>
                                </button>
                                <button class=" font-bold px-4 rounded">
                                    <a href="{{ route('orders.edit', $order->id) }}">Edit</a>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </ul>
                <div class="pagination">
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
