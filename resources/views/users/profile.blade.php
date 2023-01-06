@extends('layouts.master')
@section('title', 'List Users')

@section('content')


{{ $user->id }}
{{ $user->name }}
{{ $user->email}}
{{ $user->typeUser }}
{{ $user->created_at}}


@endsection
