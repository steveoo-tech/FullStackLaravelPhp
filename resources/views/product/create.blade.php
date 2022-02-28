@extends('layouts.app')

@section('content')
     <hr/>
     <!-- uses partial view in the common folder -->
     @include('common.errors')

     <!-- Create task. -->
    <form action="/product/store" method="POST">
     {{ csrf_field() }}
     Create description: <input type="text" name="description"> 
     Create quantity: <input type="text" name="quantity"> 
     Create price:<input type="text" name="price">
    <button type="submit">Create Product</button>
    </form>
@endsection