<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a book</title>
</head>
<body>

    <form action="/books/insert" method="post">
        @csrf
        <div class="form-row">
            <label for="">Title</label>
            <input type="text" name="title">
        </div>
        <div class="form-row">
            <label for="">Author</label>
            <input type="text" name="author">
        </div>
        <div class="form-row">
            <label for="">Genre</label>
            <select name="genre" id="">
                @foreach($genres as $genre)
                    @php($genre = $genre->attributesToArray())
                    <option value="{{$genre['genre_name']}}">{{$genre['genre_name']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-row">
            <label for="">Price</label>
            <input type="number" name="price">
        </div>
        <div class="form-row">
            <label for="">Image URL</label>
            <input type="text" name="url">
        </div>
        <button type="submit">Add</button>
    </form>

</body>
</html>
