<x-layout>
<form action="/admin/add-category" method="post">
    @csrf
<label for="name">Name</label>
<input type="name" id="name" name="name" required>
<input type="submit" id="submit" value="Submit">
</form>
</x-layout>