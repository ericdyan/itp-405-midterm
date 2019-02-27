@extends('layout')
@section('title', 'Albums')
@section('main')
<table>
  <table class="table">
      <tr>
        <th><h3>Albums</h3></th>
      </tr>
      @foreach($albums as $album)
        <tr>
          <th>
            <a href="/albums/{{$album->AlbumId}}/reviews">{{$album->Title}}</a>
          </th>
        </tr>
      @endforeach
    </table>
</table>


@endsection
