<ul id="primary-menu">

    <li><a href="{{route('index')}}">Home Page</a></li>
    <li><a href="{{route('pictures.index')}}">Tutti i quadri</a></li>

    @if (!auth()->check())
    
        <li><a href="/login">Accedi</a></li>
        <li><a href="/register">Registrati</a></li>

    @else

        <li><a href="{{route('users.profile')}}">Profilo</a></li>
        <li><a href="{{route('users.pictures')}}">I miei quadri</a></li>
        <li><a href="{{route('pictures.create')}}">Nuovo quadro</a></li>
        <li>

            <form action="/logout" method="post">
        
                @csrf
        
                <input type="submit" value="Logout">
        
            </form>

        </li>

    @endif

</ul>