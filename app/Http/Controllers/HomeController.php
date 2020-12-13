<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome(){
        //return view('home'); hago una redireccion al catalog show
        return redirect()->action('App\Http\Controllers\CatalogController@getIndex');
        //return redirect('/catalog'); //Asi tambien podria valer
    }
}
