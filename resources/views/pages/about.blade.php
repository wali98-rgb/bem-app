@extends('master')

@section('content')
    {{-- Visi-Misi Start --}}
    <section class="visi-misi" id="visi-misi">
        <h1 class="visi-misi-title"><span>Visi</span> Misi</h1>
        <div class="visi-misi-visi row">
            <div class="visi-visi">
                <h1 class="visi-title">Visi</h1>
                <p class="visi">
                    Badan Eksekutif Mahasiswa sebagai wadah aspirasi, menjadi jembatan antara mahasiswa dan kampus
                    , serta mendorong mahasiswa untuk peduli sesama, religius, kreatif, dan inovatif.
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
                    <li>Menggali dan mawadahi aspirasi mahasiswa: mengadakan forum terbuka dan proaktif untuk menghimpun aspirasi mahasiswa
                        diberbagai bidang kepentingan.
                    </li>
                    <li>Memperkuat komunikasi dan kolaborasi: mendorong partisipasi mahasiswa dalam kegiatan sosial dan keagamaan yang bertujuang untuk
                        mmbantu sesama dan memperkuat nilai-nilai kemanusiaan dan keagamaan.
                    </li>
                    <li>Menyokong inovasi: mendukung proyek-proyek inovatif yang menghasilkan solusi dalam memecahkan masalah dan meningkatkan pengalaman
                        belajar mahasiswa.
                    </li>
                </ul>
                </p>
            </div>
        </div>
    </section>
    {{-- Visi-Misi End --}}
@endsection