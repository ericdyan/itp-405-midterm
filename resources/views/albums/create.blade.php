@extends('layout')

@section('title', 'New Review')

@section('main')
  <form class="" action="/albums/{{$albumId}}/reviews" method="post">
    @csrf
    <div class="form-group">
      <input type="hidden" name="albumId" value="{{$albumId}}">
      <label for="genre">Review Title</label>
      <input class="form-control" type="text" name="title" id="title" value="{{old('title')}}">
      <small class="text-danger">{{$errors->first('title')}}</small>
    </div>
    <div class="form-group">
      <label for="body">Write a Review</label>
      <textarea class="form-control" name="body" rows="3" id="body">{{old('body')}}</textarea>
      <small class="text-danger">{{$errors->first('body')}}</small>
    </div>
    <div class="form-group">
      <label for="rating">Rating</label>
      <select class="form-control" name="rating" id="rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>

    </div>
    <button class="btn btn-primary" type="submit" name="button">Save</button>
  </form>

@endsection
