<x-layout>

    <h1>Acquista: {{$picture->title}}</h1>

    <x-form-errors />

    <form action="{{route('pictures.checkout.perform', $picture->id)}}" method="post">

        @csrf

        <label for="name">Nome</label>

        <input type="text" name="nome" id="nome">
    
        <label for="cognome">Cognome</label>

        <input type="text" name="cognome" id="cognome">

        <label for="indirizzo-spedizione">Indirizzo di spedizione</label>

        <input type="text" name="indirizzo_spedizione" id="indirizzo-spedizione">

        <label for="indirizzo-fatturazione">Indirizzo di fatturazione</label>

        <input type="text" name="indirizzo_fatturazione" id="indirizzo-fatturazione">

        <label for="cap">CAP</label>

        <input type="number" name="cap" id="cap">

        <label for="citta">Città</label>

        <input type="text" name="citta" id="citta">

        <label for="telefono">Telefono</label>

        <input type="text" name="telefono" id="telefono">

        <label for="email">Email</label>

        <input type="email" name="email" id="email">

        <input type="submit" value="Acquista">

    </form>

</x-layout>