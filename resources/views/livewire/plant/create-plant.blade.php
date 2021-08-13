<form action="{{ route('plant.store') }}" method="POST">
    @csrf

    <input type="text" name="name" value="{{ $name }}">
    <input type="text" name="description" value="{{ $description }}">

    <button type="submit">Add plant</button>
</form>
