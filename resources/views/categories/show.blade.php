<x-layout>

    <h1>Categoria {{$categoryTitle}}</h1>

    @if (!$pictures->isEmpty())
    
        @foreach ($pictures as $picture)
        
            @if ($picture->image !== '')
            
                <img src="{{asset('storage/' . $picture->image)}}" alt="{{$picture->title}}" style="max-width:200px;">

            @endif
        
            <h2>{{$picture->title}}</h2>

            <p>{{$picture->description}}</p>

            <p>€ {{$picture->price}}</p>

            <p>Venditore: {{$picture->user->name}}</p>

            <p>Email: {{$picture->user->email}}</p>

            @if (auth()->check())

                @if (auth()->user()->id == $picture->user_id)
            
                    <a href="{{route('pictures.edit', $picture->id)}}">Modifica</a>

                    <br><br>

                    <form action="{{route('pictures.destroy', $picture->id)}}" method="POST">

                        @csrf

                        @method('DELETE')
                    
                        <input type="submit" value="Elimina">

                    </form>

                @endif

            @endif

            <br>

        @endforeach

    @else

        <p>Non ci sono quadri appartenenti a questa categoria</p>

    @endif

</x-layout>