@extends('layout')
@section('title', 'Reviews')
@section('main')
<table>
      <tr>
        <th><h3>Displaying {{$count}} Reviews</h3></th>
      </tr>

      <tr>
        @if(count($reviews) > 0)
        <th>
          <h5>Average Rating: {{$counter/$count}}</h5>
        </th>
        @else
        <th>
          <h5>Average Rating: 0</h5>
        </th>
        @endif
      </tr>
      @if(count($reviews) === 0)
      <tr>
        <th>No reviews have been written</th>
      </tr>
      @endif
      @foreach($reviews as $review)
        <tr>
          <th>
            <h6 class="font-weight-bold">{{$review->title}}</h6>
          </th>
        </tr>
        <tr>
          <th>{{$review->body}}</th>
        </tr>
      @endforeach
</table>
<a class="btn btn-primary" href="/albums/{{$albumId}}/reviews/new">Write a Review</a>


@endsection
