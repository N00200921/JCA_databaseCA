<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video_games;
use Hash;

class Video_gamesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video_games = Video_games::all();
        return view('admin.video_games.index', [

            'video_games' => $video_games
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video_games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       
        $request->validate([
    
        'title' => 'required',
        'genre' =>'required|max:500',
        'release_date' => 'required',
        'publisher' => 'required',
        'metascore' => 'required',
        'video_game_image' => 'file|image'
  
        ]);  

        $video_game_image = $request->file('video_game_image');
        $filename = $video_game_image->hashName();

        $path = $video_game_image->storeAs('public/images', $filename);


        // if validation passes create the new book
        $video_game = new Video_games();
        $video_game->title = $request->input('title');
        $video_game->genre = $request->input('genre');
        $video_game->release_date = $request->input('release_date');
        $video_game->publisher = $request->input('publisher');
        $video_game->metascore = $request->input('metascore');
        $video_game->image_location = $filename;
        $video_game->save();



        return redirect()->route('admin.video_games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video_game = Video_games::findOrFail($id);

        return view('admin.video_games.show', [
            'video_game' => $video_game
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $video_game = Video_games::findOrFail($id);

        return view('admin.video_games.edit', [
            'video_game' => $video_game
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $video_game = Video_games::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'genre' =>'required|max:500',
            'release_date' => 'required|date',
            'publisher' => 'required',
            'metascore' => 'required'
        ]);

       
        $video_game->title = $request->input('title');
        $video_game->genre = $request->input('genre');
        $video_game->release_date = $request->input('release_date');
        $video_game->publisher = $request->input('publisher');
        $video_game->metascore = $request->input('metacritic');
      
        $video_game->save();

        return redirect()->route('admin.video_games.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video_game = Video_games::findOrFail($id);
        $video_game->delete();

        return redirect()->route('admin.video_games.index');
    }


}
