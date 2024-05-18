<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/genre-list.css')}}">
    <title>Genres</title>
</head>
<body>
    <x-navigation/>
    <button onclick="onAdd()">Add</button>
    <div class="table-container">
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
                        <form action="">
                            <button class="table-button" type="submit" formmethod="get" formaction="/genre/edit/{{$genre['genre_id']}}">
                                Edit
                            </button>
                            <button class="table-button" type="submit" formmethod="get" formaction="/genre/delete/{{$genre['genre_id']}}">
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
            hello!
            <button>button</button>
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
