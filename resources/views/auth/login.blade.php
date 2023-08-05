<x-layout>

    <h1>Accedi al tuo profilo</h1>

    <x-form-errors />

    <form action="/login" method="post">

        @csrf
    
        <label for="email">Email</label>

        <input type="email" name="email" id="email">

        <label for="password">Password</label>

        <input type="password" name="password" id="password">

        <input type="submit" value="Accedi">

    </form>

</x-layout>