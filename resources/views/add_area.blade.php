@extends('layouts.app')
@section('content')
    <form action="/add-area" method="POST" style="margin-top:2%; margin-left:40%">
        @csrf
        <label for="area_name">Enter area name</label>
        <input type="text" name="area_name"><br>
        <input type="submit" class="btn btn-primary" value="Add Area">
    </form>
@endsection
