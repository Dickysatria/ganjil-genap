@extends('layout.head')
@section('content')

{{-- <section>
    <div class="form">
        <div class="container">
            <div class="heading2">
                <h2>Cetak Angka Ganjil Genap</h2>
            </div>
            <form method="post" action="/hasil">
                @csrf
                <label>Masukkan Angka Pertama</label>
                <input type="number" name="a"/>
                <label>Masukkan Angka Kedua</label>
                <input type="number" name="b"/>
                <input class="submit" type="submit" value="Hasil" />
            </form>
            <h3>Hasil : </h3>
        </div>
    </div>
</section> --}}
<section>
    <div class="form">
        <div class="container">
            <div class="heading2">
                <h2>Cetak Angka Ganjil Genap</h2>
            </div>
            <form method="post" action="/hasil">
                @csrf
                <label>Masukkan Angka Pertama</label>
                <input type="number" name="a"/>
                <label>Masukkan Angka Kedua</label>
                <input type="number" name="b"/>
                <input class="submit" type="submit" value="Hasil" />
            </form>
            <h3>Hasil : </h3>
        </div>
    </div>
</section>
@endsection
