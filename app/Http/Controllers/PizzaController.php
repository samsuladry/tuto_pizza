<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Pizza;
// use Pizza;

class PizzaController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza:: where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index', [
            'pizzas' => $pizzas,
            'name' => request('name'),
            'age' => request('age')
            ]);
    }

    public function show($id)
    {
        $pizza = Pizza::findorFail($id);
        return view('pizzas.show', [ 'pizza' => $pizza] );
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        // error_log(request('name')); //request tu ak amik name apa yangada dalam form
        // error_log(request('type'));
        // error_log(request('base'));

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->save();
        
        return redirect('/')->with('mssg', 'Thanks For Your Order');
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
