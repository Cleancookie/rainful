<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($plant->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('plant.index') }}" class="text-xs underline text-gray-400">Back to plants</a>
                    <img class="mx-auto my-2" src="https://picsum.photos/500/250" alt="">
                    <h1 class="text-5xl">{{ $plant->name }}</h1>
                    <small class="text-gray-500">by {{ $plant->user->name }}</small>

                    <p>{{ $plant->description ?? 'No description set' }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
