@extends('layouts.admin')

@section('content')

<h2>Hello {{ ucwords(Auth::user()->username) }}</h2>

@stop