{{-- Extends_Main_layouts_start --}}

@extends('layouts.layout')

{{-- Extends_Main_layouts_end --}}

@section('title','CodersBee')

@section('content')
    {{-- Navbar --}}
    @include('webpages.navbar')

    @include('webpages.body')



@endsection
