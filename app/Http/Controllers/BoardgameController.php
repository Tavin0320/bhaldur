<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boardgame;
use App\Publisher;

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
        $publishers = Publisher::orderBy('name')->get();

        $data['publishers'] = $publishers;  
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

    public function addNew() {

        $publishers = Publisher::orderBy('name')->get();

        $data['publishers'] = $publishers;
         
        return view('boardgames-add', $data);
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $min = $request->input('min-player');
        $max = $request->input('max-player');
        $min_duration = $request->input('min-duration');
        $max_duration = $request->input('max-duration');
        $age = $request->input('min-age');
        $publisher = $request->input('publisher');

        
        $boardgame = Boardgame::create([
            'title' => $title,
            'slug' => strtolower(str_replace(' ', '-', $title)),
            'box_cover' => 'asdfgh.jpg',
            'min_players' => $min,
            'max_players' => $max,
            'min_duration' => $min_duration,
            'max_duration' => $max_duration,
            'min_age' => $age,
            'publisher_id' => $publisher,
            ]);

        return redirect('boardgames/'.$boardgame->slug);

    }
}
