@extends('layouts.app')

@section('content')

<div id="app"><home-component :user="{{Auth::user()}}"></home-component></div>
@endsection
