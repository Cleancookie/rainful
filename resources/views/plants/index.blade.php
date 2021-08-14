<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-row justify-end">
                        <a href="{{ route('plant.create') }}" class="text-xs underline btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            New plant
                        </a>
                    </div>
                    @foreach ($plants->items() as $plant)
                        <p class="py-1">
                            <a href="{{ route('plant.show', $plant->id) }}">{{ $plant->name }}</a>
                        </p>
                    @endforeach

                    {{ $plants->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
