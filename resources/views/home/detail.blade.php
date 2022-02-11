@extends('layouts.app')
@section('content')
    @if ($todo != null)
        <br/>
        <b>Todo # {{$todo->id}}.</b><br/>
        {{$todo->description}}<br/>
    @endif
@endsection

