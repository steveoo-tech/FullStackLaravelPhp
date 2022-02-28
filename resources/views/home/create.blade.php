@extends('layouts.app')

@section('content')
     <hr/>
     <!-- uses partial view in the common folder -->
     @include('common.errors')

     <!-- Create task. -->
    <form action="/home/store" method="POST">
     {{ csrf_field() }}
     Create Task: <input type="text" name="description"> 
    <button type="submit">Create Task</button>
    </form>
@endsection