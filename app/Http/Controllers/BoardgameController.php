<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boardgame;

class BoardgameController extends Controller
{

/*
   |--------------------------------------------------------------------------
   | Boardgame Controller
   |--------------------------------------------------------------------------
   |
   | This controller is responsible for boardgames, yeah.
   |
   */


   /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct() {
       //$this->middleware(‘guest’);
   }

    public function index() {
        $boardgames = Boardgame::get();

        $data['boardgames'] = $boardgames;

        return view('boardgames', $data); 
    }


}
