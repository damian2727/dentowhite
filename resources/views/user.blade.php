@extends('layouts.master')

@section('title')
 Perfil de {{ $User->name }} 

@endsection

@section('content')
<p><strong>Nombre: </strong>{{ $User->name }}</p>
<p><strong>Email: </strong>{{ $User->email }}</p>

@endsection