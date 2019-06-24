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
        // $boardgames = Boardgame::join('publishers', 'publishers.id', '=', 'boardgames.publisher_id')
        //     ->orderBy('publishers.name')
        //     ->get();

        //Returns the list of boardgames in alphabetical order
        $boardgames = Boardgame::orderBy('title')->get();

        $data['boardgames'] = $boardgames;

        return view('boardgames', $data); 
    }

    public function single($slug) {

        //Returns the slug of a boardgame in the url when viewed in a singular format,
        //eg. boardgames/arcadia-quest
        $boardgame = Boardgame::where('slug', $slug)->first();

        $data['boardgame'] = $boardgame;

        return view('boardgames-single', $data);
    }


}
