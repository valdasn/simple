<h1>Create</h1><br>
<form method="POST" action="{{route('author.store')}}">
    Name: <input type="text" name="author_name">
    Surname: <input type="text" name="author_surname">
    <!-- CSRF token for form security -->
    @csrf
    <button type="submit">ADD</button>
</form>
    