@php
    use App\Models\Book;
@endphp

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/generic-table.css')}}">
    <title>Rented</title>
</head>
<body>

    <x-navigation/>
    <div class="table-container">
        <button id="book-add" style="background-color: red;" onclick="document.location.href = '/logout'">Logout</button>
        <table id="table-rented">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Rent Date</th>
                <th>Rent Due</th>
            </tr>
            @foreach($collection as $book)
                @php($details = Book::where('book_id', $book['book_id'])->get()[0]->attributesToArray())
                <tr>
                    <td data-value="{{$book['rent_id']}}">{{$book['rent_id']}}</td>
                    <td data-value="{{$details['book_title']}}">{{$details['book_title']}}</td>
                    <td data-value="{{$details['book_author']}}">{{$details['book_author']}}</td>
                    <td data-value="{{$details['book_price']}}">{{$details['book_price']}}</td>
                    <td data-value="{{$book['rent_date']}}">{{date_create($book['rent_date'])->format('F j, Y')}}</td>
                    <td data-value="{{$book['rent_due']}}">{{date_create($book['rent_due'])->format('F j, Y')}}</td>
                </tr>
            @endforeach
        </table>
    </div>

</body>
</html>
