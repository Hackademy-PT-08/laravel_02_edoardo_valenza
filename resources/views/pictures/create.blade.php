<x-layout>

    <form action="{{route('pictures.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label for="titolo">Titolo</label>

        <input type="text" name="titolo" id="titolo">

        <label for="descrizione">Descrizione</label>

        <textarea name="descrizione" id="descrizione" cols="30" rows="10"></textarea>

        <label for="prezzo">Prezzo</label>

        <input type="number" name="prezzo" id="prezzo">

        <label for="immagine">Immagine</label>

        <input type="file" name="immagine" id="immagine">

        <input type="submit" value="Aggiungi">

    </form>

</x-layout>