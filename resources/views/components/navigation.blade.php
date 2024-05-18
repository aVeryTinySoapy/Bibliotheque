<link rel="stylesheet" href="{{asset('/css/navigation.css')}}">

<div class="navigation">
    {{-- Display the logo here --}}
    <div class="navigation-container">
        <div class="logo-container">
            <img id="logo" src="{{asset('/resources/images/book.png')}}" alt="some image">
            <span id="business-name">Bibilioteque De Sasa</span>
        </div>
        <ul class="navigation-items">
            <li id="nav-1" onclick="document.location.href = '/'">Home</li>
            <li id="nav-2" onclick="document.location.href = '/catalogue/1'">Browse</li>
            @if(Auth::user()->attributesToArray()["user_role"] == "admin")
                <li id="nav-3" onclick="document.location.href = '/dashboard'">Dashboard</li>
            @endif
            <li id="nav-4" onclick="document.location.href = '/rented'">profile</li>
        </ul>
    </div>
</div>
