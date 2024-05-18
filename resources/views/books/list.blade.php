<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
<x-navigation/>
<button onclick="document.location.href = '/books/add'">Add</button>
<table id="table-genre">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    @foreach($collection->all() as $book)
        <tr>
            <td data-value="{{$book['book_id']}}">{{$book['book_id']}}</td>
            <td data-value="{{$book['book_title']}}">{{$book['book_title']}}</td>
            <td data-value="{{$book['book_author']}}">{{$book['book_author']}}</td>
            <td data-value="{{$book['book_genre']}}">{{$book['book_genre']}}</td>
            <td data-value="{{$book['book_price']}}">{{$book['book_price']}}</td>
            <td class="table-actions">
                <form action="">
                    <button class="table-btn" formaction="/book/{{$book['book_id']}}" formmethod="get">
                        View
                    </button>
                    <button class="table-btn" formaction="/books/edit/{{$book['book_id']}}" formmethod="get">
                        Edit
                    </button>
                    <button class="table-btn" formaction="/books/delete/{{$book['book_id']}}" formmethod="get">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
