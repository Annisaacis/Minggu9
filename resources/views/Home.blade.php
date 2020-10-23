@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    YG ENTERTAINMENT<br>
                    <br>
                    YG Entertainment adalah perusahaan hiburan asal Korea Selatan yang didirikan pada tahun 1996 di Seoul, Korea Selatan. "YG" merupakan singkatan dari Yang‑gun yang diambil dari nama panggilan sang pendiri sekaligus mantan direktur eksekutif, Yang Hyun-suk. Perusahaan ini beroperasi sebagai label rekaman, agen pencari bakat, perusahaan produksi musik dan konser, manajemen acara dan penerbit musik. Selain itu, perusahaan ini juga mengoperasikan sejumlah perusahaan anak, termasuk lini pakaian, manajemen golf dan merek kosmetik. YG Entertainment adalah salah satu dari tiga label rekaman terkemuka di industri K-pop bersama dengan S.M. Entertainment dan JYP Entertainment.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection