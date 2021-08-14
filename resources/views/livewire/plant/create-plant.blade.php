<form action="#" wire:submit.prevent="save">
    @csrf

    <div class="form-control my-2">
        <label class="label" for="name">
            <span class="label-text">What's your plant called?</span>
        </label>
        <input type="text" name="name" placeholder="Mr. Petals" class="input input-bordered @error('plant.name') input-error @enderror" wire:model.debounce.300ms="plant.name">
        <label class="label" for="name">
            <span class="label-text-alt">&nbsp @error('plant.name'){{ $message }} @enderror</span>
        </label>
    </div>

    <div class="form-control my-2">
        <label class="label" for="description">
            <span class="label-text">Description</span>
        </label>
        <input type="text" name="description" placeholder="A housewarming gift from mum" class="input input-bordered @error('plant.description') input-error @enderror" wire:model.debounce.300ms="plant.description">
        <label class="label" for="description">
            <span class="label-text-alt">&nbsp @error('plant.description') {{ $message }} @enderror</span>
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Add plant</button>
</form>
