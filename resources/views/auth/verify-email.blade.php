<x-layout>

    <p>Abbiamo inviato un'email di conferma al tuo indirizzo.</p>

    <form action="/email/verification-notification" method="post">

        @csrf
    
        <input type="submit" value="Invia di nuovo email di verifica">

    </form>

</x-layout>