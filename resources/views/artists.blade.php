@extends('layout')
@section('title', 'Artists')
@section('main')
<table>
  <table class="table">
      <tr>
        <th><h3>Artists</h3></th>
      </tr>
      @foreach($artists as $artist)
        <tr>
          <th>
            <a href="/artists/{{$artist->ArtistId}}/albums">{{$artist->Name}}</a>
          </th>
        </tr>
      @endforeach
    </table>
</table>
@endsection
