@extends('layout.head')
@section('title', 'Hasil')
@section('content')
<div>
    <a class="nav-link active" href="/"><- Back to Home</a>
</div>
<div class="container">

    <h1>Hasil</h1>
    <br>
    <table class=" table table-bordered table-stripped">
        <thead>
            <tr>
                <th scope="col">Angka</th>
                <th scope="col">Bilangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item => $value)
            <tr>
                <td>Angka {{ $item }} adalah</td>
                <td>{{ $value }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
