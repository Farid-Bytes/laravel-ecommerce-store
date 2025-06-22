<x-layout>
    <form action="/admin/unit/update/{{ $unit->id }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ $unit->name }}" required>
        <input type="submit" id="submit" value="Submit">
    </form>
</x-layout>
