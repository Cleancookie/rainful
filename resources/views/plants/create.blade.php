<x-app-layout>
    <div class="card lg:card-side shadow-xl max-w-xl mx-auto bg-white rounded-xl">
        <div class="card-body">
            <h2 class="card-title">Add Plant</h2>
            <a href="{{ route('plant.index') }}" class="text-xs underline text-gray-400">Back to plants</a>
            <livewire:plant.create-plant />
        </div>
    </div>
</x-app-layout>
