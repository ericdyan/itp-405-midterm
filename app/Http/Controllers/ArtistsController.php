<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArtistsController extends Controller
{
    public function index()
    {
      $artists = DB::table('artists')->get();

      return view('artists', [
        'artists' => $artists
      ]);
    }

    public function albums($artistId)
    {
      $albums = DB::table('albums')
      ->where('ArtistId', $artistId)
      ->get();

      return view('artists.albums', [
        'albums' => $albums
      ]);
    }
}
