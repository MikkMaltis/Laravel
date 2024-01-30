<form action="{{ route('authors.update', $author) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Add form fields for author details -->
    <input type="text" name="name" value="{{ $author->name }}">
    <!-- Add other form fields -->
    <button type="submit">Update</button>
</form>