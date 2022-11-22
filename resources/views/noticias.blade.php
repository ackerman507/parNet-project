@extends('sidebar')
@section('title', 'Noticias del momento')
@section('content')
    <table>
        <thead>
            <th>Titulo</th>
            <th>Detalle</th>
        </thead>
        <tbody>
            @foreach ($news as $n)
                @if ($n->active == 1)
                    <tr>
                        <td>{{ $n->title }}</td>
                        <td>{{ $n->description }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection
