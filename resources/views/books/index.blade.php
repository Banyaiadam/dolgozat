<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Cars</h1>
    <ol>
        @foreach ($books as $book)
            <li>{{$book->tittle}}</li>
            <ul>
                @if (auth()->check() && auth()->user()->role == 'user')
                    <form action="{{ route('books.show', $book->id) }}" method="GET">
                        <input type="submit" value="Mutat">
                    </form>
                @endif
            </ul>
        @endforeach
    </ol>
</body>

</html>