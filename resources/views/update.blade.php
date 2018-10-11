@extends('layout.base')

@section('title')
    Update
@endsection

@section('namePage')
    Update
@endsection

@section('form')
    <form method="post" action="{{ route('update', ['id' => $id]) }}">
        {{ csrf_field() }}

        @include('include.base')
        @endsection

        @section('endform')
    </form>
@endsection

@section('button')
    Update
@endsection