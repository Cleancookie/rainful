<form action="{{ route('plant.store') }}" method="POST" wire:submit.prevent="save">
    @csrf

    <div class="form-control my-4">
        <label class="label" for="name">
            <span class="label-text">What's your plant called?</span>
        </label>
        <input type="text" name="name" placeholder="Name" class="input input-bordered @error('plant.name') input-error @enderror" wire:model.debounce.300ms="plant.name">
        @error('plant.name')
        <label class="label" for="name">
            <span class="label-text-alt">{{ $message }}</span>
        </label>
        @enderror
    </div>

    <div class="form-control my-4">
        <label class="label" for="description">
            <span class="label-text">Description</span>
        </label>
        <input type="text" name="description" placeholder="Description" class="input input-bordered @error('plant.description') input-error @enderror" wire:model.debounce.300ms="plant.description">
        @error('plant.description')
        <label class="label" for="description">
            <span class="label-text-alt">{{ $message }}</span>
        </label>
        @enderror
    </div>

    <button type="submit">Add plant</button>
</form>
