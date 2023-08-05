<x-layout>

    <h1>Tutti i miei quadri</h1>

    @foreach ($user_pictures as $user_picture)
    
        @if ($user_picture->image !== '')
        
            <img src="{{asset('storage/' . $user_picture->image)}}" alt="{{$user_picture->title}}" style="max-width:200px;">

        @endif
        
        <h2>{{$user_picture->title}}</h2>

        <p>{{$user_picture->description}}</p>

        <p>€ {{$user_picture->price}}</p>
        
        <a href="{{route('pictures.edit', $user_picture->id)}}">Modifica</a>

        <br><br>

        <form action="{{route('pictures.destroy', $user_picture->id)}}" method="POST">

            @csrf

            @method('DELETE')
        
            <input type="submit" value="Elimina">

        </form>

    @endforeach

</x-layout>