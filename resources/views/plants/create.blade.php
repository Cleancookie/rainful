<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Plant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('plant.index') }}" class="text-xs underline text-gray-400">Back to plants</a>
                    <form action="{{ route('plant.store') }}" method="POST">
                        @csrf

                        <label for="name">Plant Name:</label>
                        <input type="text" name="name">

                        <label for="description">Description:</label>
                        <input type="text" name="description">

                        <button type="submit">Add</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
