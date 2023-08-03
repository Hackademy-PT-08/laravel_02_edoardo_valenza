<x-layout>

    <h1>Tutti i quadri</h1>

    @foreach ($pictures as $picture)
    
        <img src="{{asset('storage/' . $picture->image)}}" alt="{{$picture->title}}" style="max-width:200px;">
    
        <h2>{{$picture->title}}</h2>

        <p>{{$picture->description}}</p>

        <p>€ {{$picture->price}}</p>

        <a href="{{route('pictures.edit', $picture->id)}}">Modifica</a>

        <br>

        <form action="{{route('pictures.destroy', $picture->id)}}" method="POST">

            @csrf

            @method('DELETE')
        
            <input type="submit" value="Elimina">

        </form>

    @endforeach

</x-layout>