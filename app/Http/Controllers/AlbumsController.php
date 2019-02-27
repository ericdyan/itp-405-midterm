<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class AlbumsController extends Controller
{
    public function index($albumId)
    {
      $reviews = DB::table('reviews')
      ->where('album_id', $albumId)
      ->get();
      if($reviews->count() == 0) {
        $none = 1;
      }
      $counter = 0;
      for($i = 0; $i < $reviews->count(); $i++)
      {
        $counter += $reviews[$i]->rating;
      }
      $count = $reviews->count();

      $none = 0;
      return view('albums.reviews', [
        'reviews' => $reviews,
        'albumId' => $albumId,
        'counter' => $counter,
        'count' => $count
      ]);
    }

    public function create($albumId)
    {
      return view('albums.create', [
        'albumId' => $albumId
      ]);
    }

    public function store(Request $request)
    {

      $albumId = $request->albumId;
      $input = $request->all();
      $rules = [
        'title' => 'required|',
        'body' => 'required|min:10|'
      ];
      $validated = Validator::make($input, $rules);

      if($validated->fails()) {
        return redirect("albums/$albumId/reviews/new")
          ->withErrors($validated)
          ->withInput();
      }
      $timeStamp = now();


      DB::table('reviews')->insert([
        'title' => $request->title,
        'body' => $request->body,
        'rating' => $request->rating,
        'album_id' => $albumId
      ]);


      return redirect("albums/$albumId/reviews");
    }
}
