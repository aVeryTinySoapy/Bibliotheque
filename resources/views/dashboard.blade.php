<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('/css/dashboard.css')}}">
    <title>Dashboard</title>
</head>
<body>
    <x-navigation/>

    <div id="grid">
        <div class="displayable-container" id="display-books">
            <span class="displayable-title">Books</span>
            <span class="displayable-data">{{$books}}</span>
        </div>
        <div class="displayable-container" id="display-genres">
            <span class="displayable-title">Genres</span>
            <span class="displayable-data">{{$genres}}</span>
        </div>
        <div class="displayable-container" id="display-users">
            <span class="displayable-title">Users</span>
            <span class="displayable-data">{{$users}}</span>
        </div>
        <div class="button-container" id="btn-books" onclick="document.location.href = '/books/view'">
            Books
        </div>
        <div class="button-container" id="btn-genres" onclick="document.location.href = '/genre/view'">
            Genre
        </div>
    </div>
</body>
</html>
