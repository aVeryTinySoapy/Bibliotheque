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
        <div class="displayable-container">
            Hello
        </div>
        <div class="displayable-container">
            Hello
        </div>
        <div class="displayable-container">
            Hello
        </div>
        <div class="button-container" onclick="document.location.href = '/genre/view'">
            Genres
        </div>
        <div class="button-container" onclick="document.location.href = '/books/view'">
            Books
        </div>
    </div>
</body>
</html>
