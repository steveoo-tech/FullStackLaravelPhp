@extends('layouts.app')
@section('content')
    @if ($product != null)
        <br/>
        <b>Product # {{$product->id}}.</b><br/>
        {{$product->description}}<br/>
    @endif
@endsection

