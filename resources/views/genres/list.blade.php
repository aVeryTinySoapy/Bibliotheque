<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('/css/generic-table.css')}}">
    <link rel="stylesheet" href="{{asset('/css/modal/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/genre/style.css')}}">
    <title>Genres</title>
</head>
<body>
    <x-navigation/>
    <div class="table-container">
        <button id="genre-add" onclick="onAdd()">Add</button>
        <table id="table-genre">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            @foreach($collection->all() as $genre)
                <tr>
                    <td data-value="{{$genre['genre_id']}}">{{$genre['genre_id']}}</td>
                    <td data-value="{{$genre['genre_name']}}">{{$genre['genre_name']}}</td>
                    <td class="table-actions">
                        <div class="actions-container">
                            <button class="table-btn" onclick="onEdit({{$genre['genre_id']}})">
                                Edit
                            </button>
                            <button class="table-btn" onclick="document.location.href = '/genre/delete/{{$genre['genre_id']}}'">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <template id="template-add">
        <div class="modal">
            <form id="modal-form">
                <span class="modal-title">Add a genre</span>
                <div class="form-row">
                    <label for="genre-name">Name</label>
                    <input id="genre-name" name="name" type="text">
                </div>
                <button type="submit" id="modal-submit">Add</button>
            </form>
            <script>
                document.querySelector('.modal').addEventListener('click', e=> {
                    e.stopPropagation();
                })
            </script>
        </div>
    </template>
    <template id="template-edit">
        <div class="modal">
            <form id="modal-form">
                <span class="modal-title">Edit genre</span>
                <div class="form-row">
                    <label for="genre-name">Name</label>
                    <input id="genre-name" name="name" type="text">
                </div>
                <button type="submit" id="modal-submit">Update</button>
            </form>
            <script>
                document.querySelector('.modal').addEventListener('click', e=> {
                    e.stopPropagation();
                })
            </script>
        </div>
    </template>

    <script src="{{asset('/js/veil.js')}}"></script>
    <script src="{{asset('/js/genres/onAdd.js')}}"></script>
</body>
</html>
