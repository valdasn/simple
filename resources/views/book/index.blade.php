

@foreach ($books as $book)
    <a href="{{route('book.edit',[$book])}}">{{$book->title}} {{$book->Author->name}} {{$book->Author->surname}}</a>
    <form method="POST" action="{{route('book.destroy', [$book])}}">
    @csrf
    <button type="submit">DELETE</button>
    </form>
    <br>
@endforeach
