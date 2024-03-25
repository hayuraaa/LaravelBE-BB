@extends('frontend.layout')

@section('title', 'Pembelajaran - Bilik Becakap')

@section('content')
    
    <div class="main-container">
    
        <div>
            Temukan beragam materi pembelajaran Muatan Lokal yang disajikan dalam berbagai format, seperti video, gambar, teks, dan quiz. Akses modul belajar yang dirancang khusus untuk membantu Anda memahami topik-topik Muatan Lokal secara mendalam, dengan panduan langkah demi langkah untuk menjadikan pembelajaran lebih menarik. Akses koleksi sumber daya tambahan seperti artikel, buku, dan video referensi untuk memperdalam pengetahuan anda.
        </div>
    <section id="pembelajaran">
        <div class="pembelajaran tmain-container">
            @foreach ($pembelajarans->sortByDesc('created_at') as $pembelajaran)
            <div class="pembelajaran-grid">
                <div class="grid-sampul">
                    <img src="{{ Storage::url($pembelajaran->sampul) }}" alt="modul-1">
                </div>
                <div class="grid-keterangan">
                    <div class="title-pembelajaran">
                        <p class="judul-pembelajaran">Modul {{ $pembelajaran->{'judul-modul'} }}</p>
                        <p class="keterangan-pembelajaran">{{ $pembelajaran->{'penjelasan-modul'} }}</p>
                    </div>
                    <a href="{{ route('pembelajaran.modul', $pembelajaran->slug) }}"><button class="pembelajaran-btn">Pelajari Lebih Lanjut</button></a>
                </div>
            </div>
                @endforeach
        </div>
    </section>
    </div>

    
@endsection