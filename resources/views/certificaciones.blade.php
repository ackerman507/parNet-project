@extends('sidebar')
@section('title', 'Certificaciones')
@section('content')
    <div class="row">
        <div class="col-5 col-md-3 titulos">
            <p style="titulos" class="ms-3">Certificaciones</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <img src="{{ asset('assets/cert.png') }}" class="img-fluid" style="height:138px;" alt="certificacion1">
        </div>
    </div>
@endsection
