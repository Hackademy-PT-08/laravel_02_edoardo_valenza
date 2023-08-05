<x-layout>

    <h1>Crea un profilo</h1>

    <x-form-errors />

    <form action="/register" method="post">

        @csrf

        <label for="name">Nome</label>

        <input type="text" name="name" id="name">
    
        <label for="email">Email</label>

        <input type="email" name="email" id="email">

        <label for="password">Password</label>

        <input type="password" name="password" id="password">

        <label for="password_confirmation">Conferma password</label>

        <input type="password" name="password_confirmation" id="password_confirmation">

        <input type="submit" value="Registrati">

    </form>

</x-layout>