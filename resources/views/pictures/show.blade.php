<x-layout>

    <h1>{{$picture->title}}</h1>

    <p>{{$picture->description}}</p>

    <a href="{{route('pictures.checkout', $picture->id)}}">Acquista</a>

</x-layout>