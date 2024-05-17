<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$book['book_title']}}</title>
</head>
<body>
    <div class="container">
        <div class="book-container">
            <div class="book-cover">
                <img src="{{$book['book_cover_img']}}" alt="{{$book['book_title']}}" width="210" height="330">
            </div>
            <div class="book-title">{{$book['book_title']}}</div>
            <div class="book-author">{{$book['book_author']}}</div>
            <div class="book-genre">{{$book['book_genre']}}</div>
        </div>
        <form action="/rent">
            <input type="text" name="id" value="{{$book['book_id']}}" hidden>
            <button type="submit">Rent</button>
        </form>
    </div>
</body>
</html>
