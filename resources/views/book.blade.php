<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/book/style.css')}}">
    <title>{{$book['book_title']}}</title>
</head>
<body>
    <x-navigation/>
    <div class="book-container">
        <div class="quick-info-container">
            <div class="book-cover">
                <img src="{{$book['book_cover_img']}}" alt="{{$book['book_title']}}" width="210" height="330">
            </div>
            <form action="/rent">
                <input type="text" name="id" value="{{$book['book_id']}}" hidden>
                <button type="submit" class="form-submit">Rent</button>
            </form>
        </div>
        <div class="book-info-container">
            <div class="book-title">{{$book['book_title']}}</div>
            <div class="book-author">
                <span class="preamble">Author:</span>
                {{$book['book_author']}}
            </div>
            <div class="book-genre">
                <span class="preamble">Genre:</span>
                {{$book['book_genre']}}
            </div>
            <div class="synopsis">
                <div class="synopsis-header">
                    <span class="header-title">Synopsis</span>
                    <hr>
                </div>
                <div class="synopsis-text">
                    {{$book['book_desc']}}
                </div>
            </div>
        </div>

    </div>
</body>
</html>
