@extends('sidebar')
@section('title', 'Cables estructurados')
@section('content')
    <div class="row mb-3">
        <div class="col-5 col-md-3 titulos">
            <p style="titulos" class="ms-3">Productos</p>
        </div>
    </div>

    <div class="row">
        @foreach ($productos as $producto)
            <div class="col-12 col-md-4">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('storage/images/productos/' . $producto->image) }}" alt="">
                    <label for="">Precio ${{ number_format($producto->price, 2) }}</label>
                    <a href="{{ route('producto_pdf.get', $producto->id) }}">Ficha tecnica</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
