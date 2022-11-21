@extends('base')
@section('title', 'Prueba')
@section('body')
    <a href="{{ route('noticias.index') }}">Noticias</a>
    <a href="{{ route('productos.index') }}">Productos</a>
    <a href="{{ route('areas.index') }}">Areas</a>
    <a href="{{ route('sugerencias.index') }}">Sugerencias</a>
    <a href="{{ route('servicios.index') }}">Servicios</a>
    <a href="{{ route('noticias.index') }}">Noticias</a>
    <a href="{{ route('solicitudes_servicios.index') }}">Solicitudes de servicio por área</a>
    <a href="{{ route('graphs') }}">Graficas</a>
@endsection