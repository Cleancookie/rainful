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
                    <a href="{{ route('plant.index') }}" class="text-xs underline text-gray-400 flex flex-row items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        <p>Back to plants</p>
                    </a>
                    <img class="mx-auto my-2" src="https://picsum.photos/500/250" alt="">
                    <h1 class="text-5xl">{{ $plant->name }}</h1>
                    <div>
                        <small class="text-gray-500">Planted by {{ $plant->user->name }} {{ $plant->created_at->diffForHumans(\Carbon\Carbon::now(), true) }} ago</small>
                    </div>

                    <p>{{ $plant->description ?? 'No description set' }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
