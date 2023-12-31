<x-layout>

    <x-form-errors />

    <form action="{{route('pictures.update', $picture->id)}}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('PUT')

        <label for="titolo">Titolo</label>

        <input type="text" name="titolo" id="titolo" value="{{$picture->title}}">

        <label for="descrizione">Descrizione</label>

        <textarea name="descrizione" id="descrizione" cols="30" rows="10">{{$picture->description}}</textarea>

        <label for="prezzo">Prezzo</label>

        <input type="number" name="prezzo" id="prezzo" value="{{$picture->price}}">

        <label for="immagine">Immagine</label>

        <input type="file" name="immagine" id="immagine">

        <label for="categorie">Categorie</label>

        <select name="categorie[]" id="categorie" multiple>

            @foreach ($categories as $category)
            
                <option value="{{$category->id}}" {{ ($picture->categories->contains($category->id)) ? 'selected' : '' }}>{{$category->name}}</option>

            @endforeach

        </select>

        <input type="submit" value="Aggiorna">

    </form>

</x-layout>