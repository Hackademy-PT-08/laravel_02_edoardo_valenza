<x-layout>

    <h1>Il mio profilo</h1>

    <x-form-errors />

    <form action="/user/profile-information" method="post">

        @csrf

        @method('PUT')

        <label for="name">Nome</label>

        <input type="text" name="name" id="name" value="{{auth()->user()->name}}">
    
        <label for="email">Email</label>

        <input type="email" name="email" id="email" value="{{auth()->user()->email}}">

        <input type="submit" value="Aggiorna">

    </form>

    <br><br>

    <x-form-errors />

    <form action="/user/password" method="post">

        @csrf

        @method('PUT')

        <label for="current_password">Password corrente</label>

        <input type="password" name="current_password" id="current_password">

        <label for="password">Password</label>

        <input type="password" name="password" id="password">

        <label for="password_confirmation">Conferma password</label>

        <input type="password" name="password_confirmation" id="password_confirmation">

        <input type="submit" value="Aggiorna password">

    </form>

</x-layout>