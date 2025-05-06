<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        $users = [
            ['name'=> 'Silvio', 'surname'=> 'Rossi', 'role'=> 'ceo'],
            ['name'=> 'Gianni', 'surname'=> 'Bianchi', 'role'=> 'frontman'],
            ['name'=> 'Sandro', 'surname'=> 'Verdi', 'role'=> 'creativo'],
        ];
        return view('about-us', ['users'=>$users]);
    }

    public function contatti()
    {
        return view('contatti');
    }

    public function prodotti()
    {
        $prodotti = [
            ['id'=> 1, 'name'=> 'Prodotto 1', 'description'=> 'Descrizione prodotto 1', 'price'=> 10.99],
            ['id'=> 2, 'name'=> 'Prodotto 2', 'description'=> 'Descrizione prodotto 2', 'price'=> 20.99],
            ['id'=> 3, 'name'=> 'Prodotto 3', 'description'=> 'Descrizione prodotto 3', 'price'=> 30.99],
        ];
        return view('prodotti');
    }
}
