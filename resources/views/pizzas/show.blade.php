@extends('layouts.app')

@section('content')
    

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        
        <div class="pizza-list">
            {{-- <h1 class="pizza__list ">Pizza List - {{$id}}</h1> --}}
            <div class="wrapper pizza-details">
                <h1>Order for {{ $pizza->name }}</h1>
                <p class="type">Type - {{ $pizza->type }}</p>
                <p class="base">Base - {{ $pizza->base }}</p>
                <div class="toppings">Extra toppings:</div>
                <ul>
                    @foreach($pizza->toppings as $topping)
                        <li>{{ $topping }}</li>
                    @endforeach
                </ul>
                <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Complete Order</button>
                </form>
            </div>
            <a href="/pizzas" class="back"><- back to all pizzas</a>
        </div>
        
    </div>

</div>

@endsection