<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/catalog.css')}}">
    <title>Catalogue</title>
</head>
<body>

    <x-navigation/>

    <section class="hero-browse">
        <div class="hero-container">
            <span class="hero-title">Browse our collection of books</span>
            <span class="hero-subtitle">Start your book reading journey!</span>
        </div>
    </section>

    <div class="catalog">
        <div class="search-container">
            <form id="search">
                <input type="text">
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="filter-container">
            <span class="genre-title">Genres</span>
            <div class="genres">
                @foreach($genres->all() as $genre)
                    <div class="genre-row">
                        <input type="checkbox" id="{{$genre['genre_name']}}" value="{{$genre['genre_name']}}">
                        <label for="{{$genre['genre_name']}}">{{$genre['genre_name']}}</label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="catalog-container">
                @foreach($collection->all() as $book)
                    <div class="card" onclick="document.location.href='/book/{{$book['book_id']}}'">
                        <div class="card-container">
                            <div class="book-image">
                                <img src="{{$book['book_cover_img']}}" alt="{{$book['book_title']}}">
                            </div>
                            <span class="book-title">{{$book['book_title']}}</span>
                            <span class="book-author">{{$book['book_author']}}</span>
                            <span class="book-genre">{{$book['book_genre']}}</span>
                            <span class="book-price">P {{$book['book_price']}}</span>
                        </div>
                    </div>
                @endforeach
        </div>
        <div class="pagination-container">
            @if($prev >= 1)
                <span class="pagination-prev" onclick="document.location.href='/catalogue/{{$prev}}'">Prev</span>
            @endif
                @if($next != 1)
                    <span class="pagination-next" onclick="document.location.href='/catalogue/{{$next}}'">Next</span>
                @endif
        </div>
    </div>

</body>
</html>
