<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('/css/generic-table.css')}}">
    <link rel="stylesheet" href="{{asset('/css/modal/book-style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/book/style.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
    <x-navigation/>

    <div class="table-container">
        <button id="book-add" onclick="onAdd()">Add</button>
        <table id="table-genre">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
            @foreach($collection->all() as $book)
                <tr>
                    <td data-value="{{$book['book_id']}}">{{$book['book_id']}}</td>
                    <td data-value="{{$book['book_title']}}">{{$book['book_title']}}</td>
                    <td data-value="{{$book['book_author']}}">{{$book['book_author']}}</td>
                    <td data-value="{{$book['book_genre']}}">{{$book['book_genre']}}</td>
                    <td class="table-actions">
                        <form action="">
                            <button id="btn-view" class="table-btn" formaction="/book/{{$book['book_id']}}" formmethod="get">
                                View
                            </button>
                        </form>
                            <button id="btn-edit" class="table-btn" onclick="onEdit({{$book['book_id']}})">
                                Edit
                            </button>
                        <form action="">
                            <button id="btn-delete" class="table-btn" formaction="/books/delete/{{$book['book_id']}}" formmethod="get">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <template id="template-add">
        <div class="modal">
            <form id="modal-form">
                <span class="modal-title">Add a book</span>
                <div class="form-row">
                    <label for="title">Title</label>
                    <input id="title" type="text" name="title">
                </div>
                <div class="form-row">
                    <label for="author">Author</label>
                    <input id="author" type="text" name="author">
                </div>
                <div class="form-row">
                    <label for="genre">Genre</label>
                    <select name="genre" id="genre">
                        @foreach($genres as $genre)
                            @php($genre = $genre->attributesToArray())
                            <option value="{{$genre['genre_name']}}">{{$genre['genre_name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-row">
                    <label for="url">Image URL</label>
                    <input id="url" type="text" name="url">
                </div>
                <button type="submit" id="modal-submit">Add</button>
            </form>
        </div>
        <script>
            document.querySelector('.modal').addEventListener('click', e=> {
                e.stopPropagation();
            })
        </script>
    </template>

    <template id="template-edit">
        <div class="modal">
            <form id="modal-form">
                <span class="modal-title">Add a book</span>
                <div class="form-row">
                    <label for="title">Title</label>
                    <input id="title" type="text" name="title">
                </div>
                <div class="form-row">
                    <label for="author">Author</label>
                    <input id="author" type="text" name="author">
                </div>
                <div class="form-row">
                    <label for="genre">Genre</label>
                    <select name="genre" id="genre">
                        @foreach($genres as $genre)
                            @php($genre = $genre->attributesToArray())
                            <option value="{{$genre['genre_name']}}">{{$genre['genre_name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-row">
                    <label for="url">Image URL</label>
                    <input id="url" type="text" name="url">
                </div>
                <button type="submit" id="modal-submit">Add</button>
            </form>
        </div>
        <script>
            document.querySelector('.modal').addEventListener('click', e=> {
                e.stopPropagation();
            })
        </script>
    </template>

    <script src="{{asset('/js/veil.js')}}"></script>
    <script src="{{asset('/js/books/onAdd.js')}}">{{}}</script>

</body>
</html>
