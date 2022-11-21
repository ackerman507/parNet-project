@extends('base')
@section('title', 'Actualizar producto')
@section('body')
    @include('productos.form')
    <button type="button" class="btn btn-success" onclick="updateProducts({{ $products->id }});">Editar</button>
@endsection

@push('scripts')
    <script src="{{ @asset('js/productos/createUpdate.js') }}"></script>
@endpush
