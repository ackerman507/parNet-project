@extends('sidebar')
@section('title', 'Fibra Optica')
@section('content')
    @include('solicitudesServicio.form');
    <button type="button" class="btn btn-success" onclick="createServiceRequest();">Enviar</button>
    
    <script src="{{ @asset('js/solicitudesServicio/createUpdate.js') }}" defer></script>
@endsection
