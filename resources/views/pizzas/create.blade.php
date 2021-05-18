@extends('layouts.app')

@section('content')

<div class="wrapper create-pizza items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <h1>Create a new Pizza</h1>
    <form action="/pizzas" method="POST" >
        @csrf
        <label for="name">Your Name: </label>
        <input type="text" id="name" name="name">

        <label for="type">Choose Pizza Type:</label>
        <select name="type" id="type">
            <option value="margherita">Margherita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>

        <label for="base">Choose Base Type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
        
        <fieldset>
            <label>extra toppings:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br/>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br/>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic <br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives <br/>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>

</div>

@endsection