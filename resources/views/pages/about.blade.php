@extends('master')

@section('content')
    {{-- Visi-Misi Start --}}
    <section class="visi-misi" id="visi-misi">
        <h1 class="visi-misi-title"><span>Visi</span> Misi</h1>
        <div class="visi-misi-visi row">
            <div class="visi-visi">
                <h1 class="visi-title">Visi</h1>
                <p class="visi">
                    Mewujudkan Badan Eksekutif Mahasiswa Indonesia Mandiri sebagai penggerak terwujudnya mahasiswa yang
                    adaftif dan interaktif terhadap lingkungan kampus dan masyarakat serta menjunjung tinggi
                    profesionalitas, berfokus pada pengembangan prestasi dan implementasi nilai-nilai integritas organisasi.
                </p>
            </div>
            <div class="visi-img">
                <img src="{{ asset('img/bem.png') }}" alt="Photo">
            </div>
        </div>
        <div class="visi-misi-misi row">
            <div class="misi-img">
                <img src="{{ asset('img/bem.png') }}" alt="Photo">
            </div>
            <div class="misi-misi">
                <h1 class="misi-title">Misi</h1>
                <p class="misi">
                <ul>
                    <li>Menciptakan Badan Eksekutif Mahasiswa Indonesia Mandiri berasas kekeluargaan, profesional serta
                        optimalisasi seluruh potensi dan aspirasi mahasiswa secara suportif.</li>
                    <li>Menciptakan hubungan yang sinergis antara organisasi mahasiswa STMIK dan STIE STAN INDONESIA
                        MANDIRI.</li>
                    <li>Mengoptimalisasi pewadahan dan penyaluran minat bakat mahasiswa STMIK dan STIE STAN INDONESIA
                        MANDIRI.</li>
                    <li>Mewujudkan gerakan mahasiswa yang efektif dan terbuka.</li>
                </ul>
                </p>
            </div>
        </div>
    </section>
    {{-- Visi-Misi End --}}
@endsection