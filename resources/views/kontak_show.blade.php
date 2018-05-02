@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Edit Kontak</h1>
            <hr>
            @foreach($data as $datas)<br>
            Nama : {{ $datas->nama }}<br>
            Email : {{ $datas->email }}<br>
            No HP : {{ $datas->nohp }}<br>
            Alamat : {{ $datas->alamat }}<br>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection