<x-layout>

    <h1>Tutti i miei clienti</h1>

    @foreach ($user_customers as $user_customer)
        
        <h2>{{$user_customer->first_name}} {{$user_customer->last_name}}</h2>

        <p>{{$user_customer->email}}</p>

        <p>{{$user_customer->phone}}</p>

    @endforeach

</x-layout>