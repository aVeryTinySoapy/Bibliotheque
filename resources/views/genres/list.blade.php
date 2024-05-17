<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genres</title>
</head>
<body>

    <button onclick="document.location.href = '/genre/add'">Add</button>
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
                <td class="table-actions" style="display: flex; justify-content: space-between">
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

</body>
</html>
