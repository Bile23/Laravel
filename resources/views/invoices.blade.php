
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <!-- <h1>{{ $name }} </h1> -->

    @extends('layouts.app')
    @section('content')

    <div class = 'container bg-red-300'>
        <form method = "POST" action="/invoices-create">
            <!-- generate hidden token -->
            @csrf 
            <input type="text" name="invoice_number">
            <input type="text" name="amount">
    
            <x-text-input></x-text-input>
    
            <button>Submit</button>
        </form>
    </div>
    @endsection



