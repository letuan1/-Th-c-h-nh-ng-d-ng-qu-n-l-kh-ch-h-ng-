@extends('layout.base')

@section('title')
    Insert
@endsection

@section('namePage')
    Insert
@endsection

@section('form')
    <form method="post" action="{{ route('insert') }}">
        {{ csrf_field() }}

        @include('include.base')
        @endsection

        @section('endform')
    </form>
@endsection

@section('button')
    Update
@endsection